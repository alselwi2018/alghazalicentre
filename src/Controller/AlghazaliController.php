<?php

namespace App\Controller;

use App\Entity\Complain;
use App\Entity\ContactUs;
use App\Entity\FacilityBooking;
use App\Entity\Jobs;
use App\Entity\Karate;
use App\Entity\Supplementary;
use App\Entity\Users;
use App\Form\SupplementartDetailsType;
use Symfony\Component\Form\CallbackTransformer;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Doctrine\DBAL\Types\DateType;
use Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormView;
use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

use Omines\DataTablesBundle\Adapter\ArrayAdapter;
use Omines\DataTablesBundle\Column\TextColumn;
use Omines\DataTablesBundle\Controller\DataTablesTrait;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Craue\FormFlowBundle\Form\FormFlowInterface;


class AlghazaliController extends Controller
{
    /**
     * @Route("/", name="home")
     * @Method({"POST"})
     */
    public function index()
    {
        return $this->render('/alghazali/home.html.twig');
    }


    /**
     * @Route("/contact-us", name="new_contact_us")
     * @Method({"GET","POST"})
     */
    public function contact_us_form(Request $request){

        $contect = new ContactUs();
        $form = $this->createFormBuilder($contect)
            ->add('name',TextType::class, ['attr'=>['class'=>'form-control']])
            ->add('email',EmailType::class, ['attr'=>['class'=>'form-control']])
            ->add('phone_number',NumberType::class,[

                'attr' => ['class'=>'form-control']
            ])
            ->add('subject',TextType::class,['attr'=>['class'=>'form-control']])
            ->add('message',TextareaType::class, ['attr'=>['class'=>'form-control']])
            ->add('send',SubmitType::class, [
                'label'=>'Send',
                'attr'=>['class'=>'btn btn-primary mx-auto d-block mt-3' ]])->getForm();
             $form->handleRequest($request);
             if($form->isSubmitted() && $form->isValid()){
                 $contact = $form->getData();
                 $entityManager = $this->getDoctrine()->getManager();
                 $entityManager->persist($contact);
                 $entityManager->flush();
                 $this->addFlash('success','Sent successfully thanks ' );

                 return $this->redirectToRoute('home');
             }


        return $this->render('/alghazali/contact-us.html.twig',array('form' => $form->createView()));

    }
//    /**
//     * @Route("/footer", name="footer_form")
//     * @Method({"GET","POST"})
//     */
//    public function footer_form(Request $request){
//
//        $em = $this->getDoctrine()->getManager();
//        $en = $em->getRepository(ContactUs::class)->findAll();
//        $foot = new ContactUs();
//
//        $form_foot = $this->createFormBuilder($foot)
//            ->add('name',TextType::class,['attr'=>['class'=>'form-control','placeholder'=>'Name']])
//            ->add('email',EmailType::class,['attr'=>['class'=>'form-control','placeholder'=>'Email']])
//            ->add('message',TextareaType::class,['attr'=>['class'=>'form-control','placeholder'=>'Message']])
//            ->add('send',SubmitType::class,['attr'=>['label'=>'Send','class'=>'btn btn-primary mt-4 text-center float-right']])
//            ->getForm();
//            return $this->render('inc/footer.html.twig',array('foot' => $form_foot->createView(), 'entity'=>$en));
//    }



    /**
     * @Route("/About-us")
     */
    public function about_us(){
        return $this->render('About-us.html.twig');
    }


    /**
     * @Route("/received-contact-us", name="contact-us-messages")
     */
    public function contact_us_received(){
        $contact = $this->getDoctrine()->getRepository(ContactUs::class)->findAll();
        return $this->render('/messages/contact-us-received.html.twig',['contact'=>$contact]);

    }
    /**
     * @Route("views/{id}", name="messages_id")
     */
    public function contact_us_view(ContactUs $co){
        $contact = $this->getDoctrine()->getRepository(ContactUs::class)->find($co);
        return $this->render('messages/view.html.twig', array('view' => $contact));

    }

    /**
     * @Route("/booking")
     * Method({"GET","POSt"})
     */
    public function booking(Request $request){
        $book = new FacilityBooking();
        $yes = array('Yes'=>'Yes','No'=>'No');
        $form = $this->createFormBuilder($book)
        ->add('OrganisationName', TextType::class, ['attr'=>['class'=>'form-control']])
            ->add('email',EmailType::class, ['attr'=>['class'=>'form-control']])
            ->add('address',TextType::class,['attr'=>['class'=>'form-control']])
            ->add('ContactName',TextType::class,['attr'=>['class'=>'form-control']])
            ->add('ContactNumber',NumberType::class,['attr'=>['class'=>'form-control']])
            ->add('reason',TextareaType::class,['attr'=>['class'=>'form-control']])
            ->add('number_of_people',NumberType::class,['attr'=>['class'=>'form-control']])
            ->add('date',TextType::class,['attr'=>['class'=>'form-control datepicker']])
            ->add('time',TextType::class,['attr'=>['class'=>'form-control timepicker']])
            ->add('large_main_hall',CheckboxType::class,['required'=>false])
            ->add('classroom',CheckboxType::class,['required'=>false])
            ->add('projector_Screen',CheckboxType::class,['required'=>false])
            ->add('PASystem',CheckboxType::class,['required'=>false])
            ->add('additional_services',TextType::class,['attr'=>['class'=>'form-control']])
            ->add('lunch_food',ChoiceType::class,['choices'=>$yes])
            ->add('sign_name',TextType::class,['attr'=>['class'=>'form-control']])
            ->add('signature',TextType::class,['attr'=>['class'=>'form-control']])
            ->add('sign_date',TextType::class,['attr'=>['class'=>'form-control']])
            ->add('send',SubmitType::class,['attr'=>['class'=>'btn btn-primary mx-auto d-block','label'=>'Book']])->getForm();
            $book->setRef(mt_rand(0,9999));
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $book = $form->getData();
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($book);
            $entityManager->flush();
            $this->addFlash('success','Booking has been sent successfully and your Reference Number is '.$book->getRef() );

            return $this->redirectToRoute('home');
        }
        return $this->render('forms/booking.html.twig',['form'=>$form->createView()]);

    }
    /**
     * @Route("/booking_received")
     *
     */
    public function booking_received(){
        $booking = $this->getDoctrine()->getRepository(FacilityBooking::class)->findAll();
        return $this->render('/messages/booking-received.html.twig',['booking'=>$booking]);
    }
    /**
     * @Route("/show-booking/{id}", name="show-booking")
     */
    public function show_booking(FacilityBooking $id){
        $booking = $this->getDoctrine()->getRepository(FacilityBooking::class)->find($id);
        return $this->render('/messages/show-bookings.html.twig',['booking'=>$booking]);
    }
    /**
     * @Route("/jobs", name="jobs")
     */
    public function job_form(Request $request){
        $job = new Jobs();
        $form = $this->createFormBuilder($job)
            ->add('PositionAppliedFor',TextType::class,['attr'=>['class'=>'form-control' ]])
            ->add('FirstName',TextType::class,['attr'=>['class'=>'form-control']])
            ->add('LastName',TextType::class,['attr'=>['class'=>'form-control']])
            ->add('address',TextType::class,['attr'=>['class'=>'form-control']])
            ->add('mobile',NumberType::class,['attr'=>['class'=>' form-control']])
            ->add('email',EmailType::class,['attr'=>['class'=>' form-control']])
            ->add('DateOfBirth',TextType::class,['attr'=>['class'=>' form-control datepicker']])
            ->add('DrivingLicence',TextType::class,['attr'=>['class'=>' form-control']])
            ->add('car',TextType::class,['attr'=>['class'=>' form-control']])
            ->add('FirstReferenceName',TextType::class,['attr'=>['class'=>' form-control']])
            ->add('ReferenceRelation',TextType::class,['attr'=>['class'=>' form-control']])
            ->add('SecondReferenceName',TextType::class,['required'=>false,'attr'=>['class'=>' form-control']])
            ->add('SecondReferenceAddress',TextType::class,['required'=>false,'attr'=>['class'=>'form-control']])
            ->add('SecondReferenceRelation',TextType::class,['required'=>false,'attr'=>['class'=>'form-control']])
            ->add('ContactReference',TextType::class,['required'=>false,'attr'=>['class'=>'form-control']])
            ->add('sign',TextType::class,['attr'=>['class'=>'form-control']])
            ->add('DateSigned',TextType::class,['attr'=>['class'=>'form-control']])
            ->add('EmpFrom',TextType::class,['attr'=>['class'=>'form-control']])
            ->add('EmploymentTo',TextType::class,['attr'=>['class'=>'form-control']])
            ->add('EmployerNameAndContact',TextType::class,['attr'=>['class'=>'form-control']])
            ->add('PositionHeld',TextType::class,['attr'=>['class'=>'form-control']])
            ->add('ReasonForLeaving',TextareaType::class,['attr'=>['class'=>'form-control']])
            ->add('EmploymentTwoFrom',TextType::class,['required'=>false,'attr'=>['class'=>'form-control']])
            ->add('EmploymentTwoTo',TextType::class,['required'=>false,'attr'=>['class'=>'form-control']])
            ->add('EmployerTwoNameAndContact',TextType::class,['required'=>false,'attr'=>['class'=>'form-control']])
            ->add('PositionTwoHeld',TextType::class,['required'=>false,'attr'=>['required'=>false,'class'=>'form-control']])
            ->add('ReasonForLeavingTwo',TextareaType::class,['required'=>false,'attr'=>['class'=>'form-control']])
            ->add('EmploymentThreeFrom',TextType::class,['required'=>false,'attr'=>['class'=>'form-control']])
            ->add('EmploymentThreeTo',TextType::class,['required'=>false,'attr'=>['class'=>'form-control']])
            ->add('EmployerThreeNameAndContact',TextType::class,['required'=>false,'attr'=>['class'=>'form-control']])
            ->add('PositionThreeHeld',TextType::class,['required'=>false,'attr'=>['required'=>false,'class'=>'form-control']])
            ->add('ReasonForLeavingThree',TextareaType::class,['required'=>false,'attr'=>['class'=>'form-control']])
            ->add('EmploymentFourFrom',TextType::class,['required'=>false,'attr'=>['class'=>'form-control']])
            ->add('EmploymentFourTo',TextType::class,['required'=>false,'attr'=>['class'=>'form-control']])
            ->add('EmployerFourNameAndContact',TextType::class,['required'=>false,'attr'=>['class'=>'form-control']])
            ->add('PositionFourHeld',TextType::class,['required'=>false,'attr'=>['class'=>'form-control']])
            ->add('ReasonForLeavingFour',TextareaType::class,['required'=>false,'attr'=>['class'=>'form-control']])
            ->add('gaps',TextType::class,['label'=>'Please account for gaps in your employment history (include all periods of employment with dates).','attr'=>['class'=>'form-control']])
            ->add('duties',TextType::class,['label'=>'Please outline main duties and responsibilities of your current or most recent post.','attr'=>['class'=>'form-control']])
            ->add('QualificationName',TextType::class,['attr'=>['class'=>'form-control']])
            ->add('ObtainedFrom',TextType::class,['attr'=>['class'=>'form-control']])
            ->add('QualificationDate',TextType::class,['attr'=>['class'=>'form-control']])
            ->add('QualificationTwoName',TextType::class,['required'=>false,'label'=>' ','attr'=>['class'=>'form-control']])
            ->add('ObtainedTwoFrom',TextType::class,['required'=>false,'label'=>' ','attr'=>['class'=>'form-control']])
            ->add('QualificationTwoDate',TextType::class,['required'=>false,'label'=>' ','attr'=>['class'=>'form-control']])
            ->add('QualificationThreeName',TextType::class,['required'=>false,'label'=>' ','attr'=>['class'=>'form-control']])
            ->add('ObtainedThreeFrom',TextType::class,['required'=>false,'label'=>' ','attr'=>['class'=>'form-control']])
            ->add('QualificationThreeDate',TextType::class,['required'=>false,'label'=>' ','attr'=>['class'=>'form-control']])
            ->add('QualificationFourName',TextType::class,['required'=>false,'label'=>' ','attr'=>['class'=>'form-control']])
            ->add('ObtainedFourFrom',TextType::class,['required'=>false,'label'=>' ','attr'=>['class'=>'form-control']])
            ->add('QualificationFourDate',TextType::class,['required'=>false,'label'=>' ','attr'=>['class'=>'form-control']])

            ->add('OtherTraining',TextType::class,['label'=>'Please include all training you may feel to be relevant, including dates.','attr'=>['class'=>'form-control']])
            ->add('skills',TextType::class,['label'=>'Do you have any language skills? If so, please provide details:','attr'=>['class'=>'form-control']])
            ->add('OtherSkills',TextType::class,['label'=>'Do you have any other specialist skills/abilities you feel may be relevant?','attr'=>['class'=>'form-control']])
            ->add('send',SubmitType::class,['attr'=>['class'=>'btn btn-primary mx-auto d-block','label'=>'Submit Job Form']])->getForm();

        $job->setRef(mt_rand(0,9999));
        $date = new \DateTime();
        $job->setDateCreated($date);


        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $job = $form->getData();
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($job);
            $entityManager->flush();
            $this->addFlash('success','Sent Successfully '.$job->getId());
            return $this->redirectToRoute('home');
        }
        return$this->render('forms/jobs.html.twig',['job'=>$form->createView()]);
    }
    /**
     * @Route("/jobs-received", name="jobs-received")
     */
    public function show_jobs(){
        $job = $this->getDoctrine()->getRepository(Jobs::class)->findAll();
        return $this->render('messages/jobs-received.html.twig',['job'=>$job]);
    }
    /**
     * @Route("/job-show/{id}", name="job-show")
     */
    public function job_show($id){
        $job_show = $this->getDoctrine()->getRepository(Jobs::class)->find($id);
        return $this->render('messages/job-show.html.twig',['job_show'=>$job_show]);
    }
    /**
     * @Route("/complain", name="complain")
     * Method("POST","GET")
     */
    public function complain(Request $request){
        $com = new Complain();
        $form = $this->createFormBuilder($com)
            ->add('FullName',TextType::class,['attr'=>['class'=>'form-control']])
            ->add('MobileNumber',NumberType::class,['required'=>false,'attr'=>['class'=>'form-control']])
            ->add('Email',EmailType::class,['attr'=>['class'=>'form-control']])
            ->add('Subject',TextType::class,['attr'=>['class'=>'form-control']])
            ->add('MessageAboutTheComplain',TextareaType::class,['attr'=>['class'=>'form-control','rows'=>15,'cols'=>20]])
            ->add('Send',SubmitType::class,['label'=>'Send Your Complain','attr'=>['class'=>'btn btn-primary text-center']])->getForm();
       $com->setReference(mt_rand(0,9999));
       $date = new \DateTime();
       $com->setCreatedDate($date);
       $form->handleRequest($request);
       if($form->isSubmitted() && $form->isValid()){
           $com = $form->getData();
           $entityManager = $this->getDoctrine()->getManager();
           $entityManager->persist($com);
           $entityManager->flush();
           $this->addFlash('success','Your complain message has been sent Successfully'.$com->getReference());
         return  $this->redirectToRoute('home');
       }
      return $this->render('forms/complain.html.twig',['complain'=>$form->createView()]);
    }
    /**
     * @Route("/complain-messages", name="complain-messages")
     */
    public function complain_messages(){
        $complain = $this->getDoctrine()->getRepository(Complain::class)->findAll();
        return $this->render('/messages/complain-messages.html.twig',['complain'=>$complain]);
    }
    /**
     * @Route("/complain-show/{id}", name="show-complain")
     */
    public function show_complain($id){
        $com = $this->getDoctrine()->getRepository(Complain::class)->find($id);
        return $this->render('/messages/complain-messages-show.html.twig',['complain'=>$com]);
    }

    /**
     * @Route("/register", name="register")
     */
    public function register(Request $request, UserPasswordEncoderInterface $passwordEncoder){
    $user = new Users();
    $form = $this->createForm(RegisterController::class, $user);
    $form->handleRequest($request);
    if($form->isSubmitted() && $form->isValid()){
        $password = $passwordEncoder->encodePassword($user,$user->getPassword());
        $user->setPassword($password);

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($user);
        $entityManager->flush();
        $this->addFlash('success','User has been saved successfully');
        return $this->redirectToRoute('home');
    }
    return $this->render('alghazali/sign-in/register.html.twig',['form'=>$form->createView()]);
    }

    /**
     * @Route("/login", name="login")
     */
    public function login(Request $request, AuthenticationUtils $utils)
    {
        $error = $utils->getLastAuthenticationError();
        $username = $utils->getLastUsername();
        return $this->render('security/login.html.twig', [
            'username' => $username,
            'error' => $error
        ]);
    }
    /**
     * @Route("/logout", name="logout")
     */
public function logout(){

}

/**
 * @Route("/karate", name="karate")
 */
public function karate(Request $request){
    $karate = new Karate();
    $eth = array('White/British'=>'white/british','White/Other'=>'white/other',
        'Pakistani'=>'pakistani','Indian'=>'indian','Bangladeshi'=>'bangladeshi','Iranian'=>'iranian','Eastern European'=>'Easter European',
        'Somali'=>'Somali','Black Caribbean'=>'Black Caribbean','Black - African'=>'Black - African','Black - Other'=>'Black - Other','Yemeni'=>'Yemeni',
        'Arab'=>'Arab','Other Ethnic Group'=>'Other Ethnic Group','Other Mixed Background'=>'Other Mixed Background','Preferred Not To Say'
        =>'Preferred Not To Say');
    $form = $this->createFormBuilder($karate)
        ->add('FirstName',TextType::class,['attr'=>['class'=>'form-control']])
        ->add('LastName',TextType::class,['attr'=>['class'=>'form-control']])
        ->add('DateOfBirth', TextType::class,['attr'=>['class'=>'form-control']])
        ->add('Gender',ChoiceType::class,['attr'=>['class'=>'col-sm-3 form-control '],'choices'=>['Male'=>true,'Female'=>false]])
        ->add('Ethnicity',ChoiceType::class,['attr'=>['class'=>'col-sm-3 form-control w-25 p-3 h-100'],'choices'=>$eth,'expanded'=>true,'multiple'=>true,'mapped'=>true])
        ->add('HomeAddress',TextType::class,['attr'=>['class'=>'form-control']])
        ->add('PostCode',TextType::class,['attr'=>['class'=>'form-control']])
        ->add('ContactNumber',NumberType::class,['attr'=>['class'=>'form-control']])
        ->add('FullNameOfMotherGuardian',TextType::class,['attr'=>['class'=>'form-control'],'required'=>false])
        ->add('EmergencyContactName',TextType::class,['attr'=>['class'=>'form-control']])
        ->add('RelationshipToChild',TextType::class,['attr'=>['class'=>'form-control']])
        ->add('ContactNumberReference',NumberType::class,['attr'=>['class'=>'form-control','label'=>'Contact Number']])
        ->add('Medication',ChoiceType::class,['attr'=>['class'=>'form-control alert alert-info'],'label'=>'Do you have any physical incapacities that may impair your training?','choices'=>['Yes'=>'yes','No'=>'no']])
        ->add('YesMedication',TextType::class,['attr'=>['class'=>'form-control'],'required'=>false,'label'=>'Please state clearly what these are:'])
        ->add('DeclarationOne',ChoiceType::class,['attr'=>['class'=>'form-control col-sm-2 radio-inline health-target-radio'],'choices'=>['Yes'=>'yes Decalared','No'=>'Not Declared'],'label'=>'I agree not to hold anyone responsible or liable to legal action as a result of any injury I may sustain and also agree to abide by all club rules and that I am liable to disciplinary action by the committee if any of these rules are broken.'])
        ->add('Consent',ChoiceType::class,['attr'=>['class'=>'form-control col-sm-2'],'choices'=>['Yes'=>'yes consent','No'=>'not consent'],'label'=>'I consent for my personal data in this form to be passed on to LCC and other organisations deemed necessary for data analysis and I understand that I can withdraw my consent at any time '])
        ->add('DeclareName',TextType::class,['attr'=>['class'=>'form-control col-sm-12'],'label'=>'Name'])
        ->add('DeclareDate',TextType::class,['attr'=>['class'=>'form-control col-sm-12'],'label'=>'Date'])
        ->add('Permission',TextType::class,['attr'=>['class'=>'form-control'],'label'=>' '])
        ->add('PermitName',TextType::class,['attr'=>['class'=>'form-control'],'label'=>'Name'])
        ->add('PermitDate',TextType::class,['attr'=>['class'=>'form-control'],'label'=>'Date'])
        ->add('Send',SubmitType::class,['label'=>'Send Your Karate Form','attr'=>['class'=>'btn btn-danger text-center']])
        ->getForm();
    $karate->setMessageRead('no');
    $karate->setRef(mt_rand(000,9999));
    $date = new \DateTime();
    $karate->setDateCreated($date);
    $form->handleRequest($request);
    if($form->isSubmitted() && $form->isValid()){
        $karate = $form->getData();

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($karate);
        $entityManager->flush();
        $this->addFlash('success','Karate form has been successfully sent');
        return $this->redirectToRoute('home');
    }
    return $this->render('/forms/karate-form.html.twig',['form'=>$form->createView()]);

}
/**
 * @Route("/karate-messages", name="karate-messages")
 */
public function karate_messages(){
    $karate = $this->getDoctrine()->getRepository(Karate::class)->findAll();
    return $this->render('messages/karate-received.html.twig',['form'=>$karate]);
}
/**
 * @Route("/karate-show/{id}", name="karate-show")
 */
public function show_karate($id){
    $em = $this->getDoctrine()->getRepository(Karate::class)->find($id);
    return $this->render('/messages/karate-show.html.twig',['em'=>$em]);
}
/**
 * @Route("/supplementary-form", name="supplementary-form")
 */
public function supplementary(SupplementartDetailsType $flow){

    return $this->processFlow(new Supplementary(), $flow,'forms/supplementary/supplementary.html.twig');

}

    /**
     * @Route("/details_nav", name="personal_nav")
     * @param $formData
     * @param FormFlowInterface $flow
     * @param $template
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     */
    public function detailnavigation(SupplementartDetailsType $flow){
        $flow->setAllowDynamicStepNavigation(true);
        return $this->processFlow(new Supplementary(), $flow, 'forms/supplementary/SupplementaryDynamicStepPersonal.html.twig' );
    }

    /**
     * @Route("/supplementary_redirect", name="supplementary_redirect")
     * @param SupplementartDetailsType $flow
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     */
    public function supplementaryRedirect(SupplementartDetailsType $flow){
        $flow->setAllowRedirectAfterSubmit(true);
        return $this->processFlow(new Supplementary(), $flow, 'forms/supplementary/supplementaryCreateRedirect.html.twig');
    }

    public function processFlow($formData, FormFlowInterface $flow, $template){

        $flow->bind($formData);
        $form = $submittedForm = $flow->createForm();
        if($flow->isValid($submittedForm)){
            $flow->saveCurrentStepData($submittedForm);
            if($flow->nextStep()){
                $form = $flow->createForm();
            }else{
                $em = $this->getDoctrine()->getManager();
                $em->persist($formData);
                $em->flush();

                $flow->reset();
                return $this->redirect($this->generateUrl('home'));
            }
        }
        if($flow->redirectAfterSubmit($submittedForm)){
            $request = $this->get('request_stack')->getCurrentRequest();
            $params = $this->get('craue_formflow_util')->addRouteParameters(array_merge($request->query->all(),
                $request->attributes->get('_route_params')), $flow);
            return $this->redirect($this->generateUrl($request->get('_route'), $params));
        }
        return $this->render($template,[
            'form'=>$form->createView(),
            'flow' => $flow,
            'formData' => $formData,
        ]);
    }


}
