<?php

namespace App\Controller;

use App\Entity\Client;
use App\Form\ClientType;
use App\Repository\ClientRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin')]
class DatawarehouseController extends AbstractController
{
    #[Route('/', name: 'dashboard')]
    public function dashboard(): Response
    {
        return $this->render('datawarehouse/dashboard/dashboard.html.twig', [
            'controller_name' => 'DatawarehouseController',
        ]);
    }

    #[Route('/client', name: 'client_liste')]
    public function clientListe(ClientRepository $clientRepository): Response
    {
        $clients = $clientRepository->findAll();
        //dump($clients);die;
        return $this->render('datawarehouse/client/client_liste.html.twig', [
            'clients' => $clients,
        ]);
    }

    /**
     * @Route("/client/{id}", name="client_details", requirements={"id"="\d+"}, methods={"Get", "POST"})
     */
    public function clientDetails(ClientRepository $clientRepository, Client $client): Response
    {
        return $this->render('datawarehouse/client/client_details.html.twig', [
            'client' => $client,
        ]);
    }

    /**   
     * @Route("/client/ajouter", name="client_ajout")
     * @Route("/client/editer/{id}", name="client_edition", requirements={"id"="\d+"}, methods={"Get", "POST"})
     */
    public function clientAjout(Client $client = null, Request $request, EntityManagerInterface $manager): Response
    {
        if($client === null){
            $client = new Client();
        }
        $form = $this->createForm(ClientType::class, $client, [
            'method' => 'GET',
            'csrf_protection' => false //Pour ne pas envoyer le token dans l'url
        ]);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            if($client->getId() === null){
                $manager->persist($client);
            }
            
            $manager->flush();
            return $this->redirectToRoute('client_liste');
        }

        return $this->render('datawarehouse/client/client_ajout.html.twig', [
            'client' => $client,
            'form' => $form->createView(),
        ]);
    }
}