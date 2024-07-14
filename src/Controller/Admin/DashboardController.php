<?php

namespace App\Controller\Admin;

use App\Entity\Abonnement;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
use App\Entity\Pro;
use App\Repository\UserRepository;

use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;

class DashboardController extends AbstractDashboardController
{
    private $userRepository;
    private $adminUrlGenerator;


    public function __construct(AdminUrlGenerator $adminUrlGenerator, UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;

        $this->adminUrlGenerator = $adminUrlGenerator;
    }


    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        $FourLastestUser = $this->userRepository->findFourLastestUser();
        $numTotalUsers = $this->userRepository->countTotalUsers();
        $numuserpacha = $this->userRepository->countByStatus('pacha');
        $numuserfreq = $this->userRepository->countByStatus('frequence');
        $numusernon = $this->userRepository->countByStatus('non_membre');

        $url = $this->adminUrlGenerator
            ->setController(UserCrudController::class)
            ->setAction('index')
            ->generateUrl();

        return $this->render('admin/dashboard.html.twig', [
            'FourLastestUser' => $FourLastestUser,
            'numTotalUsers' => $numTotalUsers,
            'numuserpacha' => $numuserpacha,
            'numuserfreq' => $numuserfreq,
            'numusernon' => $numusernon, 
            'url' => $url,
        ]);
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Forest Hill');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Utilisateurs', 'fas fa-list', User::class);
        yield MenuItem::linkToCrud('Entreprises', 'fas fa-list', Pro::class);
        yield MenuItem::linkToCrud('Abonnements', 'fas fa-list', Abonnement::class);

    }
}
