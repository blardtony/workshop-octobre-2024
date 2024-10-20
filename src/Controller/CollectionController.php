<?php
declare(strict_types=1);

namespace App\Controller;

use App\Collection\ChiffreCollection;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class CollectionController extends AbstractController
{
    #[Route('/collection', name: 'app_collection')]
    public function __invoke(): Response
    {
//        $chiffreCollection = ChiffreCollection::of([1, 2, 6, 3, 8, 4, 10])
//            ->garderLesValeursSuperieuresA(5)
//        ;
//
//        dd($chiffreCollection->toArray());

        return new Response('Chiffre collection');
    }
}
