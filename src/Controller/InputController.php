<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use App\Entity\SetNumber;

class InputController extends AbstractController
{
    /**
     * @Route("/", methods={"GET","POST"}, name="input_index")
     */
    public function index(Request $request)
    {
    	$setNumber = new SetNumber();

        $form = $this->createFormBuilder($setNumber)
            ->add('in0', IntegerType::class, ['required' => false, 'label' => false, 'empty_data' => 0])
            ->add('in1', IntegerType::class, ['required' => false, 'label' => false, 'empty_data' => 0])
            ->add('in2', IntegerType::class, ['required' => false, 'label' => false, 'empty_data' => 0])
            ->add('in3', IntegerType::class, ['required' => false, 'label' => false, 'empty_data' => 0])
            ->add('in4', IntegerType::class, ['required' => false, 'label' => false, 'empty_data' => 0])
            ->add('in5', IntegerType::class, ['required' => false, 'label' => false, 'empty_data' => 0])
            ->add('in6', IntegerType::class, ['required' => false, 'label' => false, 'empty_data' => 0])
            ->add('in7', IntegerType::class, ['required' => false, 'label' => false, 'empty_data' => 0])
            ->add('in8', IntegerType::class, ['required' => false, 'label' => false, 'empty_data' => 0])
            ->add('in9', IntegerType::class, ['required' => false, 'label' => false, 'empty_data' => 0])
            ->add('obl', SubmitType::class, ['label' => 'OBLICZ'])
            ->getForm();

        if ($request->isMethod('POST')) {
            $form->handleRequest($request);
            $setNumber = $form->getData();

            $setNumberOut = new SetNumber();

            $setNumberOut->setIn0($this->series($setNumber->getIn0()));
            $setNumberOut->setIn1($this->series($setNumber->getIn1()));
            $setNumberOut->setIn2($this->series($setNumber->getIn2()));
            $setNumberOut->setIn3($this->series($setNumber->getIn3()));
            $setNumberOut->setIn4($this->series($setNumber->getIn4()));
            $setNumberOut->setIn5($this->series($setNumber->getIn5()));
            $setNumberOut->setIn6($this->series($setNumber->getIn6()));
            $setNumberOut->setIn7($this->series($setNumber->getIn7()));
            $setNumberOut->setIn8($this->series($setNumber->getIn8()));
            $setNumberOut->setIn9($this->series($setNumber->getIn9()));

            return $this->render('input/indexOut.html.twig', [
                'in0' => $setNumber->getIn0(),
                'in1' => $setNumber->getIn1(),
                'in2' => $setNumber->getIn2(),
                'in3' => $setNumber->getIn3(),
                'in4' => $setNumber->getIn4(),
                'in5' => $setNumber->getIn5(),
                'in6' => $setNumber->getIn6(),
                'in7' => $setNumber->getIn7(),
                'in8' => $setNumber->getIn8(),
                'in9' => $setNumber->getIn9(),
                'out0' => $setNumberOut->getIn0(),
                'out1' => $setNumberOut->getIn1(),
                'out2' => $setNumberOut->getIn2(),
                'out3' => $setNumberOut->getIn3(),
                'out4' => $setNumberOut->getIn4(),
                'out5' => $setNumberOut->getIn5(),
                'out6' => $setNumberOut->getIn6(),
                'out7' => $setNumberOut->getIn7(),
                'out8' => $setNumberOut->getIn8(),
                'out9' => $setNumberOut->getIn9()
            ]);
        }

        return $this->render('input/index.html.twig', [
            'form' => $form->createView()
        ]);
    }

    public function series($par = 0) : int {
        $param = $par ?? 0;

        if ($param >= 100000) return -1;
        if ($param == 0) return 0;
        if ($param == 1) return 1;

        $tab[0] = 0;
        $tab[1] = 1;

        $parz = true;
        $max = 0;

        for ($i = 2; $i <= $param; $i++) {
            $pom1 = intdiv($i, 2);
            $pom2 = $pom1 + 1;

            if ($parz) {
                $tab[$i] = $tab[$pom1];
            } else {
                $tab[$i] = $tab[$pom1] + $tab[$pom2];
            }

            $parz = ! $parz;
            if ($tab[$i] > $max) $max = $tab[$i];
        }

        return $max;
    }

    /**
     * @Route("/opis", methods={"GET"}, name="input_opis")
     */
    public function opis()
    {
        return $this->render('input/opis.html.twig', []);
    }
}
