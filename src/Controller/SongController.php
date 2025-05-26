<?php 

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class SongController extends AbstractController 
{
    #[Route('/api/songs/{id}', methods: ['GET'], name: 'api_songs_get_one')]
    public function getSong(int $id, LoggerInterface $logger) : Response 
    {
       // TODO query the database
       $song = [
        'id' => $id,
        'name' => 'Waterfalls',
        'url' => 'https://symfonycasts.s3.amazonaws.com/sample.mp3',
       ]; 

       
       $logger->info('Returning API responses for song {song}', [
        'song' => $id,
       ]);

       return $this->json($song);
    }
}