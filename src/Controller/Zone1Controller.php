<?php

namespace App\Controller;

use App\Entity\ZoneDeLoisir;
use App\Entity\Reservation;

use App\Form\ReservationType;


use App\Form\FormmType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\RestaurationRepository;

use Symfony\Component\HttpFoundation\File\UploadedFile;

use App\Entity\Hotel;
use App\Form\Hotel1Type;


/**
 * @Route("/zone1")
 */
class Zone1Controller extends AbstractController
{
    /**
     * @Route("/", name="zone1_index", methods={"GET"})
     */
    public function index(): Response
    {
        $zoneDeLoisirs = $this->getDoctrine()
            ->getRepository(ZoneDeLoisir::class)
            ->findAll();

        return $this->render('zone1/index.html.twig', [
            'zone_de_loisirs' => $zoneDeLoisirs,
        ]);
    }
  /**
     * @Route("/h", name="hotel_index", methods={"GET"})
     */
    public function index2(): Response
    {
        $hotels = $this->getDoctrine()
            ->getRepository(Hotel::class)
            ->findAll();

        return $this->render('hotel/index.html.twig', [
            'hotels' => $hotels,
        ]);
    }
    /**
     * @Route("/new", name="zone1_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
       
       
       
        $zoneDeLoisir = new ZoneDeLoisir();
        $form = $this->createForm(FormmType::class, $zoneDeLoisir);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file = $form['image']->getData();

            $file->move("images/", $file->getClientOriginalName());
            $zoneDeLoisir->setImage("images/".$file->getClientOriginalName());
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($zoneDeLoisir);
            $entityManager->flush();
            return $this->redirectToRoute('zone1_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('zone1/new.html.twig', [
            'zone_de_loisir' => $zoneDeLoisir,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="zone1_show", methods={"GET"})
     */
    public function show(ZoneDeLoisir $zoneDeLoisir): Response
    {
        return $this->render('zone1/show.html.twig', [
            'zone_de_loisir' => $zoneDeLoisir,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="zone1_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, ZoneDeLoisir $zoneDeLoisir): Response
    {
        $form = $this->createForm(FormmType::class, $zoneDeLoisir);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('zone1_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('zone1/edit.html.twig', [
            'zone_de_loisir' => $zoneDeLoisir,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="zone1_delete", methods={"POST"})
     */
    public function delete(Request $request, ZoneDeLoisir $zoneDeLoisir): Response
    {
        if ($this->isCsrfTokenValid('delete'.$zoneDeLoisir->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($zoneDeLoisir);
            $entityManager->flush();
        }

        return $this->redirectToRoute('zone1_index', [], Response::HTTP_SEE_OTHER);
    }
     /**
     * @Route("/new1/{id}", name="reservation_new1", methods={"GET","POST"})
     */
    public function new1(Request $request ): Response
    {
        $reservation = new Reservation();
        $form = $this->createForm(ReservationType::class, $reservation);
        $form->handleRequest($request);
     
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($reservation);
            $entityManager->flush();

            return $this->redirectToRoute('reservation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('reservation/new.html.twig', [
            'reservation' => $reservation,
            'form' => $form->createView(),
        ]);
    }

      /**
     * @Route("/", name="zone1_index2", methods={"GET"})
     */
    public function index1(): Response
    {
        $zoneDeLoisirs = $this->getDoctrine()
            ->getRepository(ZoneDeLoisir::class)
            ->findAll();

        return $this->render('zone1/index.html.twig', [
            'zone_de_loisirs' => $zoneDeLoisirs,
        ]);
    }
    
}
