<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FacilityBookingRepository")
 */
class    FacilityBooking
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
    private $organisation_name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $address;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $contact_name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $contact_number;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $reason;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $number_of_people;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $date;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $time;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $large_main_hall;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $classroom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $projector_screen;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $pa_system;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $additional_services;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lunch_food;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $sign_name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $signature;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $sign_date;

    /**
     * @ORM\Column(type="integer", length=30)
     */
    private $ref;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOrganisationName(): ?string
    {
        return $this->organisation_name;
    }

    public function setOrganisationName(string $organisation_name): self
    {
        $this->organisation_name = $organisation_name;

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

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getContactName(): ?string
    {
        return $this->contact_name;
    }

    public function setContactName(string $contact_name): self
    {
        $this->contact_name = $contact_name;

        return $this;
    }

    public function getContactNumber(): ?string
    {
        return $this->contact_number;
    }

    public function setContactNumber(string $contact_number): self
    {
        $this->contact_number = $contact_number;

        return $this;
    }

    public function getReason(): ?string
    {
        return $this->reason;
    }

    public function setReason(string $reason): self
    {
        $this->reason = $reason;

        return $this;
    }

    public function getNumberOfPeople(): ?string
    {
        return $this->number_of_people;
    }

    public function setNumberOfPeople(string $number_of_people): self
    {
        $this->number_of_people = $number_of_people;

        return $this;
    }

    public function getDate(): ?string
    {
        return $this->date;
    }

    public function setDate(string $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getTime(): ?string
    {
        return $this->time;
    }

    public function setTime(string $time): self
    {
        $this->time = $time;

        return $this;
    }

    public function getLargeMainHall(): ?string
    {
        return $this->large_main_hall;
    }

    public function setLargeMainHall(string $large_main_hall): self
    {
        $this->large_main_hall = $large_main_hall;

        return $this;
    }

    public function getClassroom(): ?string
    {
        return $this->classroom;
    }

    public function setClassroom(string $classroom): self
    {
        $this->classroom = $classroom;

        return $this;
    }

    public function getProjectorScreen(): ?string
    {
        return $this->projector_screen;
    }

    public function setProjectorScreen(string $projector_screen): self
    {
        $this->projector_screen = $projector_screen;

        return $this;
    }

    public function getPaSystem(): ?string
    {
        return $this->pa_system;
    }

    public function setPaSystem(string $pa_system): self
    {
        $this->pa_system = $pa_system;

        return $this;
    }

    public function getAdditionalServices(): ?string
    {
        return $this->additional_services;
    }

    public function setAdditionalServices(string $additional_services): self
    {
        $this->additional_services = $additional_services;

        return $this;
    }

    public function getLunchFood(): ?string
    {
        return $this->lunch_food;
    }

    public function setLunchFood(string $lunch_food): self
    {
        $this->lunch_food = $lunch_food;

        return $this;
    }

    public function getSignName(): ?string
    {
        return $this->sign_name;
    }

    public function setSignName(string $sign_name): self
    {
        $this->sign_name = $sign_name;

        return $this;
    }

    public function getSignature(): ?string
    {
        return $this->signature;
    }

    public function setSignature(string $signature): self
    {
        $this->signature = $signature;

        return $this;
    }

    public function getSignDate(): ?string
    {
        return $this->sign_date;
    }

    public function setSignDate(string $sign_date): self
    {
        $this->sign_date = $sign_date;

        return $this;
    }
    public function getRef(): ?int
    {
        return $this->ref;
    }

    public function setRef(int $ref): self
    {
        $this->ref = $ref;

        return $this;
    }
}
