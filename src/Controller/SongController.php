<?php 

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class SongController extends AbstractController 
{
    #[Route('/api/songs/{id}', methods: ['GET'])]
    public function getSong(int $id) : Response 
    {
       // TODO query the database
       $song = [
        'id' => $id,
        'name' => 'Waterfalls',
        'url' => 'https://symfonycasts.s3.amazonaws.com/sample.mp3',
       ]; 

       return $this->json($song);
    }
}