<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\JobsRepository")
 */
class Jobs
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $PositionAppliedFor;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $FirstName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $LastName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $address;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mobile;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $DateOfBirth;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $DrivingLicence;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $car;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $FirstReferenceName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ReferenceRelation;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $SecondReferenceName;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $SecondReferenceAddress;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $SecondReferenceRelation;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ContactReference;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $sign;

   

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $EmpFrom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $EmploymentTo;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $EmployerNameAndContact;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $PositionHeld;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ReasonForLeaving;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $EmploymentTwoFrom;
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $EmploymentTwoTo;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $gaps;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $duties;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $QualificationName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ObtainedFrom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $QualificationDate;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $OtherTraining;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $skills;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $OtherSkills;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $EmployerTwoNameAndContact;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $PositionTwoHeld;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ReasonForLeavingTwo;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $EmploymentThreeFrom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $EmploymentThreeTo;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $PositionThreeHeld;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ReasonForLeavingThree;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $EmploymentFourFrom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $EmploymentFourTo;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $EmploymentFourNameAndContact;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $PositionFourHeld;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ReasonForLeavingFour;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $EmployerThreeNameAndContact;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $EmployerFourNameAndContact;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $QualificationTwoName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ObtainedTwoFrom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $QualificationTwoDate;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $QualificationThreeName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ObtainedThreeFrom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $QualificationThreeDate;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $QualificationFourName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ObtainedFourFrom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $QualificationFourDate;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Ref;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $DateSigned;

    /**
     * @ORM\Column(type="datetime")
     */
    private $DateCreated;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPositionAppliedFor(): ?string
    {
        return $this->PositionAppliedFor;
    }

    public function setPositionAppliedFor(string $PositionAppliedFor): self
    {
        $this->PositionAppliedFor = $PositionAppliedFor;

        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->FirstName;
    }

    public function setFirstName(string $FirstName): self
    {
        $this->FirstName = $FirstName;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->LastName;
    }

    public function setLastName(string $LastName): self
    {
        $this->LastName = $LastName;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getMobile(): ?string
    {
        return $this->mobile;
    }

    public function setMobile(string $mobile): self
    {
        $this->mobile = $mobile;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getDateOfBirth(): ?string
    {
        return $this->DateOfBirth;
    }

    public function setDateOfBirth(string $DateOfBirth): self
    {
        $this->DateOfBirth = $DateOfBirth;

        return $this;
    }

    public function getDrivingLicence(): ?string
    {
        return $this->DrivingLicence;
    }

    public function setDrivingLicence(string $DrivingLicence): self
    {
        $this->DrivingLicence = $DrivingLicence;

        return $this;
    }

    public function getCar(): ?string
    {
        return $this->car;
    }

    public function setCar(string $car): self
    {
        $this->car = $car;

        return $this;
    }

    public function getFirstReferenceName(): ?string
    {
        return $this->FirstReferenceName;
    }

    public function setFirstReferenceName(string $FirstReferenceName): self
    {
        $this->FirstReferenceName = $FirstReferenceName;

        return $this;
    }

    public function getReferenceRelation(): ?string
    {
        return $this->ReferenceRelation;
    }

    public function setReferenceRelation(string $ReferenceRelation): self
    {
        $this->ReferenceRelation = $ReferenceRelation;

        return $this;
    }

    public function getSecondReferenceName(): ?string
    {
        return $this->SecondReferenceName;
    }

    public function setSecondReferenceName(?string $SecondReferenceName): self
    {
        $this->SecondReferenceName = $SecondReferenceName;

        return $this;
    }

    public function getSecondReferenceAddress(): ?string
    {
        return $this->SecondReferenceAddress;
    }

    public function setSecondReferenceAddress(?string $SecondReferenceAddress): self
    {
        $this->SecondReferenceAddress = $SecondReferenceAddress;

        return $this;
    }

    public function getSecondReferenceRelation(): ?string
    {
        return $this->SecondReferenceRelation;
    }

    public function setSecondReferenceRelation(?string $SecondReferenceRelation): self
    {
        $this->SecondReferenceRelation = $SecondReferenceRelation;

        return $this;
    }

    public function getContactReference(): ?string
    {
        return $this->ContactReference;
    }

    public function setContactReference(string $ContactReference): self
    {
        $this->ContactReference = $ContactReference;

        return $this;
    }

    public function getSign(): ?string
    {
        return $this->sign;
    }

    public function setSign(string $sign): self
    {
        $this->sign = $sign;

        return $this;
    }



    public function getEmpFrom(): ?string
    {
        return $this->EmpFrom;
    }

    public function setEmpFrom(string $EmpFrom): self
    {
        $this->EmpFrom = $EmpFrom;

        return $this;
    }
    public function getEmploymentTwoFrom(): ?string
    {
        return $this->EmploymentTwoFrom;
    }

    public function setEmploymentTwoFrom(string $EmploymentTwoFrom): self
    {
        $this->EmploymentTwoFrom = $EmploymentTwoFrom;

        return $this;
    }

    public function getEmploymentTo(): ?string
    {
        return $this->EmploymentTo;
    }

    public function setEmploymentTo(string $EmploymentTo): self
    {
        $this->EmploymentTo = $EmploymentTo;

        return $this;
    }

    public function getEmployerNameAndContact(): ?string
    {
        return $this->EmployerNameAndContact;
    }

    public function setEmployerNameAndContact(string $EmployerNameAndContact): self
    {
        $this->EmployerNameAndContact = $EmployerNameAndContact;

        return $this;
    }

    public function getPositionHeld(): ?string
    {
        return $this->PositionHeld;
    }

    public function setPositionHeld(string $PositionHeld): self
    {
        $this->PositionHeld = $PositionHeld;

        return $this;
    }

    public function getReasonForLeaving(): ?string
    {
        return $this->ReasonForLeaving;
    }

    public function setReasonForLeaving(string $ReasonForLeaving): self
    {
        $this->ReasonForLeaving = $ReasonForLeaving;

        return $this;
    }

    public function getGaps(): ?string
    {
        return $this->gaps;
    }

    public function setGaps(string $gaps): self
    {
        $this->gaps = $gaps;

        return $this;
    }

    public function getDuties(): ?string
    {
        return $this->duties;
    }

    public function setDuties(string $duties): self
    {
        $this->duties = $duties;

        return $this;
    }

    public function getQualificationName(): ?string
    {
        return $this->QualificationName;
    }

    public function setQualificationName(string $QualificationName): self
    {
        $this->QualificationName = $QualificationName;

        return $this;
    }

    public function getObtainedFrom(): ?string
    {
        return $this->ObtainedFrom;
    }

    public function setObtainedFrom(string $ObtainedFrom): self
    {
        $this->ObtainedFrom = $ObtainedFrom;

        return $this;
    }

    public function getQualificationDate(): ?string
    {
        return $this->QualificationDate;
    }

    public function setQualificationDate(string $QualificationDate): self
    {
        $this->QualificationDate = $QualificationDate;

        return $this;
    }

    public function getOtherTraining(): ?string
    {
        return $this->OtherTraining;
    }

    public function setOtherTraining(string $OtherTraining): self
    {
        $this->OtherTraining = $OtherTraining;

        return $this;
    }

    public function getSkills(): ?string
    {
        return $this->skills;
    }

    public function setSkills(string $skills): self
    {
        $this->skills = $skills;

        return $this;
    }

    public function getOtherSkills(): ?string
    {
        return $this->OtherSkills;
    }

    public function setOtherSkills(string $OtherSkills): self
    {
        $this->OtherSkills = $OtherSkills;

        return $this;
    }

    public function getEmployerTwoNameAndContact(): ?string
    {
        return $this->EmployerTwoNameAndContact;
    }

    public function setEmployerTwoNameAndContact(string $EmployerTwoNameAndContact): self
    {
        $this->EmployerTwoNameAndContact = $EmployerTwoNameAndContact;

        return $this;
    }

    public function getPositionTwoHeld(): ?string
    {
        return $this->PositionTwoHeld;
    }

    public function setPositionTwoHeld(string $PositionTwoHeld): self
    {
        $this->PositionTwoHeld = $PositionTwoHeld;

        return $this;
    }

    public function getReasonForLeavingTwo(): ?string
    {
        return $this->ReasonForLeavingTwo;
    }

    public function setReasonForLeavingTwo(string $ReasonForLeavingTwo): self
    {
        $this->ReasonForLeavingTwo = $ReasonForLeavingTwo;

        return $this;
    }

    public function getEmploymentThreeFrom(): ?string
    {
        return $this->EmploymentThreeFrom;
    }

    public function setEmploymentThreeFrom(string $EmploymentThreeFrom): self
    {
        $this->EmploymentThreeFrom = $EmploymentThreeFrom;

        return $this;
    }

    public function getEmploymentThreeTo(): ?string
    {
        return $this->EmploymentThreeTo;
    }

    public function setEmploymentThreeTo(string $EmploymentThreeTo): self
    {
        $this->EmploymentThreeTo = $EmploymentThreeTo;

        return $this;
    }

    public function getPositionThreeHeld(): ?string
    {
        return $this->PositionThreeHeld;
    }

    public function setPositionThreeHeld(string $PositionThreeHeld): self
    {
        $this->PositionThreeHeld = $PositionThreeHeld;

        return $this;
    }

    public function getReasonForLeavingThree(): ?string
    {
        return $this->ReasonForLeavingThree;
    }

    public function setReasonForLeavingThree(string $ReasonForLeavingThree): self
    {
        $this->ReasonForLeavingThree = $ReasonForLeavingThree;

        return $this;
    }

    public function getEmploymentFourFrom(): ?string
    {
        return $this->EmploymentFourFrom;
    }

    public function setEmploymentFourFrom(string $EmploymentFourFrom): self
    {
        $this->EmploymentFourFrom = $EmploymentFourFrom;

        return $this;
    }

    public function getEmploymentFourTo(): ?string
    {
        return $this->EmploymentFourTo;
    }

    public function setEmploymentFourTo(string $EmploymentFourTo): self
    {
        $this->EmploymentFourTo = $EmploymentFourTo;

        return $this;
    }

    public function getEmploymentFourNameAndContact(): ?string
    {
        return $this->EmploymentFourNameAndContact;
    }

    public function setEmploymentFourNameAndContact(string $EmploymentFourNameAndContact): self
    {
        $this->EmploymentFourNameAndContact = $EmploymentFourNameAndContact;

        return $this;
    }

    public function getPositionFourHeld(): ?string
    {
        return $this->PositionFourHeld;
    }

    public function setPositionFourHeld(string $PositionFourHeld): self
    {
        $this->PositionFourHeld = $PositionFourHeld;

        return $this;
    }

    public function getReasonForLeavingFour(): ?string
    {
        return $this->ReasonForLeavingFour;
    }

    public function setReasonForLeavingFour(string $ReasonForLeavingFour): self
    {
        $this->ReasonForLeavingFour = $ReasonForLeavingFour;

        return $this;
    }
    public function getEmploymentTwoTo(): ?string
    {
        return $this->EmploymentTwoTo;
    }

    public function setEmploymentTwoTo(string $EmploymentTwoTo): self
    {
        $this->EmploymentTwoTo = $EmploymentTwoTo;

        return $this;
    }

    public function getEmployerThreeNameAndContact(): ?string
    {
        return $this->EmployerThreeNameAndContact;
    }

    public function setEmployerThreeNameAndContact(string $EmployerThreeNameAndContact): self
    {
        $this->EmployerThreeNameAndContact = $EmployerThreeNameAndContact;

        return $this;
    }

    public function getEmployerFourNameAndContact(): ?string
    {
        return $this->EmployerFourNameAndContact;
    }

    public function setEmployerFourNameAndContact(string $EmployerFourNameAndContact): self
    {
        $this->EmployerFourNameAndContact = $EmployerFourNameAndContact;

        return $this;
    }

    public function getQualificationTwoName(): ?string
    {
        return $this->QualificationTwoName;
    }

    public function setQualificationTwoName(string $QualificationTwoName): self
    {
        $this->QualificationTwoName = $QualificationTwoName;

        return $this;
    }

    public function getObtainedTwoFrom(): ?string
    {
        return $this->ObtainedTwoFrom;
    }

    public function setObtainedTwoFrom(string $ObtainedTwoFrom): self
    {
        $this->ObtainedTwoFrom = $ObtainedTwoFrom;

        return $this;
    }

    public function getQualificationTwoDate(): ?string
    {
        return $this->QualificationTwoDate;
    }

    public function setQualificationTwoDate(string $QualificationTwoDate): self
    {
        $this->QualificationTwoDate = $QualificationTwoDate;

        return $this;
    }

    public function getQualificationThreeName(): ?string
    {
        return $this->QualificationThreeName;
    }

    public function setQualificationThreeName(string $QualificationThreeName): self
    {
        $this->QualificationThreeName = $QualificationThreeName;

        return $this;
    }

    public function getObtainedThreeFrom(): ?string
    {
        return $this->ObtainedThreeFrom;
    }

    public function setObtainedThreeFrom(string $ObtainedThreeFrom): self
    {
        $this->ObtainedThreeFrom = $ObtainedThreeFrom;

        return $this;
    }

    public function getQualificationThreeDate(): ?string
    {
        return $this->QualificationThreeDate;
    }

    public function setQualificationThreeDate(string $QualificationThreeDate): self
    {
        $this->QualificationThreeDate = $QualificationThreeDate;

        return $this;
    }

    public function getQualificationFourName(): ?string
    {
        return $this->QualificationFourName;
    }

    public function setQualificationFourName(string $QualificationFourName): self
    {
        $this->QualificationFourName = $QualificationFourName;

        return $this;
    }

    public function getObtainedFourFrom(): ?string
    {
        return $this->ObtainedFourFrom;
    }

    public function setObtainedFourFrom(string $ObtainedFourFrom): self
    {
        $this->ObtainedFourFrom = $ObtainedFourFrom;

        return $this;
    }

    public function getQualificationFourDate(): ?string
    {
        return $this->QualificationFourDate;
    }

    public function setQualificationFourDate(string $QualificationFourDate): self
    {
        $this->QualificationFourDate = $QualificationFourDate;

        return $this;
    }

    public function getRef(): ?string
    {
        return $this->Ref;
    }

    public function setRef(string $Ref): self
    {
        $this->Ref = $Ref;

        return $this;
    }

    public function getDateSigned(): ?string
    {
        return $this->DateSigned;
    }

    public function setDateSigned(string $DateSigned): self
    {
        $this->DateSigned = $DateSigned;

        return $this;
    }

    public function getDateCreated(): ?\DateTimeInterface
    {
        return $this->DateCreated;
    }

    public function setDateCreated(\DateTimeInterface $DateCreated): self
    {
        $this->DateCreated = $DateCreated;

        return $this;
    }
}
