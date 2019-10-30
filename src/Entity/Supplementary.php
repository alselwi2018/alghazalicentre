<?php

namespace App\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints\Date;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SupplementaryRepository")
 */
class Supplementary
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
    private $FirstName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $LastName;

    /**
     * @ORM\Column(type="datetime")
     */
    private $DateOfBirth;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Age;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Gender;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Nationality;

    /**
     * @ORM\Column(type="array")
     */
    private $Ethnicity;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $HomeAddress;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $PostCode;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $PlaceOfBirth;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $FullNameOfFather;

    /**
     * @ORM\Column(type="array")
     */
    private $Guardian;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ContactNumber;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Email;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $FullNameOfMother;

    /**
     * @ORM\Column(type="array")
     */
    private $Guardian2;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ContactNumberTwo;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $EmailTwo;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $LanguageSpokenAtHome;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $LanguageUnderstoodByStudent;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Suffer;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Medication;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $LearningDifficulties;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $AdditionalSupport;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ParentResidential;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $EmergencyContactName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $RelationshipToChild;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $EmergencyContactNumber;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $SchoolAttending;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $YearGroup;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $AttendArabicSchool;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $YesAttended;

    /**
     * @ORM\Column(type="datetime")
     */
    private $AttendFromDate;

    /**
     * @ORM\Column(type="datetime")
     */
    private $AttendToDate;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ArabicLevel;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $PhotoConsent;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $FullNameOfParentGuardian;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Signature;

    /**
     * @ORM\Column(type="datetime")
     */
    private $Date;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $hearedAboutAlghazali;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $difficultiesSpecifies;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $MotherStatus;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getDateOfBirth(): ?datetime
    {
        return $this->DateOfBirth;
    }

    public function setDateOfBirth(datetime $DateOfBirth): self
    {
        $this->DateOfBirth = $DateOfBirth;

        return $this;
    }

    public function getAge(): ?string
    {
        return $this->Age;
    }

    public function setAge(string $Age): self
    {
        $this->Age = $Age;

        return $this;
    }

    public function getGender(): ?string
    {
        return $this->Gender;
    }

    public function setGender(string $Gender): self
    {
        $this->Gender = $Gender;

        return $this;
    }

    public function getNationality(): ?string
    {
        return $this->Nationality;
    }

    public function setNationality(string $Nationality): self
    {
        $this->Nationality = $Nationality;

        return $this;
    }

    public function getEthnicity(): ?array
    {
        return $this->Ethnicity;
    }

    public function setEthnicity(array $Ethnicity): self
    {
        $this->Ethnicity = $Ethnicity;

        return $this;
    }

    public function getHomeAddress(): ?string
    {
        return $this->HomeAddress;
    }

    public function setHomeAddress(string $HomeAddress): self
    {
        $this->HomeAddress = $HomeAddress;

        return $this;
    }

    public function getPostCode(): ?string
    {
        return $this->PostCode;
    }

    public function setPostCode(string $PostCode): self
    {
        $this->PostCode = $PostCode;

        return $this;
    }

    public function getPlaceOfBirth(): ?string
    {
        return $this->PlaceOfBirth;
    }

    public function setPlaceOfBirth(string $PlaceOfBirth): self
    {
        $this->PlaceOfBirth = $PlaceOfBirth;

        return $this;
    }

    public function getFullNameOfFather(): ?string
    {
        return $this->FullNameOfFather;
    }

    public function setFullNameOfFather(string $FullNameOfFather): self
    {
        $this->FullNameOfFather = $FullNameOfFather;

        return $this;
    }

    public function getGuardian(): ?array
    {
        return $this->Guardian;
    }

    public function setGuardian(array $Guardian): self
    {
        $this->Guardian = $Guardian;

        return $this;
    }

    public function getContactNumber(): ?string
    {
        return $this->ContactNumber;
    }

    public function setContactNumber(string $ContactNumber): self
    {
        $this->ContactNumber = $ContactNumber;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->Email;
    }

    public function setEmail(string $Email): self
    {
        $this->Email = $Email;

        return $this;
    }

    public function getFullNameOfMother(): ?string
    {
        return $this->FullNameOfMother;
    }

    public function setFullNameOfMother(string $FullNameOfMother): self
    {
        $this->FullNameOfMother = $FullNameOfMother;

        return $this;
    }

    public function getGuardian2(): ?array
    {
        return $this->Guardian2;
    }

    public function setGuardian2(array $Guardian2): self
    {
        $this->Guardian2 = $Guardian2;

        return $this;
    }

    public function getContactNumberTwo(): ?string
    {
        return $this->ContactNumberTwo;
    }

    public function setContactNumberTwo(string $ContactNumberTwo): self
    {
        $this->ContactNumberTwo = $ContactNumberTwo;

        return $this;
    }

    public function getEmailTwo(): ?string
    {
        return $this->EmailTwo;
    }

    public function setEmailTwo(string $EmailTwo): self
    {
        $this->EmailTwo = $EmailTwo;

        return $this;
    }

    public function getLanguageSpokenAtHome(): ?string
    {
        return $this->LanguageSpokenAtHome;
    }

    public function setLanguageSpokenAtHome(string $LanguageSpokenAtHome): self
    {
        $this->LanguageSpokenAtHome = $LanguageSpokenAtHome;

        return $this;
    }

    public function getLanguageUnderstoodByStudent(): ?string
    {
        return $this->LanguageUnderstoodByStudent;
    }

    public function setLanguageUnderstoodByStudent(string $LanguageUnderstoodByStudent): self
    {
        $this->LanguageUnderstoodByStudent = $LanguageUnderstoodByStudent;

        return $this;
    }

    public function getSuffer(): ?string
    {
        return $this->Suffer;
    }

    public function setSuffer(string $Suffer): self
    {
        $this->Suffer = $Suffer;

        return $this;
    }

    public function getMedication(): ?string
    {
        return $this->Medication;
    }

    public function setMedication(string $Medication): self
    {
        $this->Medication = $Medication;

        return $this;
    }

    public function getLearningDifficulties(): ?string
    {
        return $this->LearningDifficulties;
    }

    public function setLearningDifficulties(string $LearningDifficulties): self
    {
        $this->LearningDifficulties = $LearningDifficulties;

        return $this;
    }

    public function getAdditionalSupport(): ?string
    {
        return $this->AdditionalSupport;
    }

    public function setAdditionalSupport(string $AdditionalSupport): self
    {
        $this->AdditionalSupport = $AdditionalSupport;

        return $this;
    }

    public function getParentResidential(): ?string
    {
        return $this->ParentResidential;
    }

    public function setParentResidential(string $ParentResidential): self
    {
        $this->ParentResidential = $ParentResidential;

        return $this;
    }

    public function getEmergencyContactName(): ?string
    {
        return $this->EmergencyContactName;
    }

    public function setEmergencyContactName(string $EmergencyContactName): self
    {
        $this->EmergencyContactName = $EmergencyContactName;

        return $this;
    }

    public function getRelationshipToChild(): ?string
    {
        return $this->RelationshipToChild;
    }

    public function setRelationshipToChild(string $RelationshipToChild): self
    {
        $this->RelationshipToChild = $RelationshipToChild;

        return $this;
    }

    public function getEmergencyContactNumber(): ?string
    {
        return $this->EmergencyContactNumber;
    }

    public function setEmergencyContactNumber(string $EmergencyContactNumber): self
    {
        $this->EmergencyContactNumber = $EmergencyContactNumber;

        return $this;
    }

    public function getSchoolAttending(): ?string
    {
        return $this->SchoolAttending;
    }

    public function setSchoolAttending(string $SchoolAttending): self
    {
        $this->SchoolAttending = $SchoolAttending;

        return $this;
    }

    public function getYearGroup(): ?string
    {
        return $this->YearGroup;
    }

    public function setYearGroup(string $YearGroup): self
    {
        $this->YearGroup = $YearGroup;

        return $this;
    }

    public function getAttendArabicSchool(): ?string
    {
        return $this->AttendArabicSchool;
    }

    public function setAttendArabicSchool(string $AttendArabicSchool): self
    {
        $this->AttendArabicSchool = $AttendArabicSchool;

        return $this;
    }

    public function getYesAttended(): ?string
    {
        return $this->YesAttended;
    }

    public function setYesAttended(string $YesAttended): self
    {
        $this->YesAttended = $YesAttended;

        return $this;
    }

    public function getAttendFromDate(): ?datetime
    {
        return $this->AttendFromDate;
    }

    public function setAttendFromDate(datetime $AttendFromDate): self
    {
        $this->AttendFromDate = $AttendFromDate;

        return $this;
    }

    public function getAttendToDate(): ?datetime
    {
        return $this->AttendToDate;
    }

    public function setAttendToDate(datetime $AttendToDate): self
    {
        $this->AttendToDate = $AttendToDate;

        return $this;
    }

    public function getArabicLevel(): ?string
    {
        return $this->ArabicLevel;
    }

    public function setArabicLevel(string $ArabicLevel): self
    {
        $this->ArabicLevel = $ArabicLevel;

        return $this;
    }

    public function getPhotoConsent(): ?string
    {
        return $this->PhotoConsent;
    }

    public function setPhotoConsent(string $PhotoConsent): self
    {
        $this->PhotoConsent = $PhotoConsent;

        return $this;
    }

    public function getFullNameOfParentGuardian(): ?string
    {
        return $this->FullNameOfParentGuardian;
    }

    public function setFullNameOfParentGuardian(string $FullNameOfParentGuardian): self
    {
        $this->FullNameOfParentGuardian = $FullNameOfParentGuardian;

        return $this;
    }

    public function getSignature(): ?string
    {
        return $this->Signature;
    }

    public function setSignature(string $Signature): self
    {
        $this->Signature = $Signature;

        return $this;
    }

    public function getDate(): ?datetime
    {
        return $this->Date;
    }

    public function setDate(datetime $Date): self
    {
        $this->Date = $Date;

        return $this;
    }

    public function getHearedAboutAlghazali(): ?string
    {
        return $this->hearedAboutAlghazali;
    }

    public function setHearedAboutAlghazali(string $hearedAboutAlghazali): self
    {
        $this->hearedAboutAlghazali = $hearedAboutAlghazali;

        return $this;
    }

    public function getDifficultiesSpecifies(): ?string
    {
        return $this->difficultiesSpecifies;
    }

    public function setDifficultiesSpecifies(string $difficultiesSpecifies): self
    {
        $this->difficultiesSpecifies = $difficultiesSpecifies;

        return $this;
    }

    public function getMotherStatus(): ?string
    {
        return $this->MotherStatus;
    }

    public function setMotherStatus(string $MotherStatus): self
    {
        $this->MotherStatus = $MotherStatus;

        return $this;
    }
}
