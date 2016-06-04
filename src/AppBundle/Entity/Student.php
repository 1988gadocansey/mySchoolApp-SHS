<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Student
 *
 * @ORM\Table(name="student")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\StudentRepository")
 */
class Student
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="firstName", type="string", length=255)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="surname", type="string", length=255)
     */
    private $surname;

    /**
     * @var string
     *
     * @ORM\Column(name="fullName", type="string", length=255)
     */
    private $fullName;

    /**
     * @var string
     *
     * @ORM\Column(name="dob", type="string", length=255)
     */
    private $dob;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="gender", type="string", length=255)
     */
    private $gender;

    /**
     * @var string
     *
     * @ORM\Column(name="indexNo", type="string", length=255, unique=true)
     */
    private $indexNo;

    /**
     * @var int
     *
     * @ORM\Column(name="age", type="integer")
     */
    private $age;

    /**
     * @var string
     *
     * @ORM\Column(name="othernames", type="string", length=255)
     */
    private $othernames;

    /**
     * @var string
     *
     * @ORM\Column(name="studentType", type="string", length=255)
     */
    private $studentType;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="classAdmitted", type="string", length=255)
     */
    private $classAdmitted;

    /**
     * @var string
     *
     * @ORM\Column(name="currentClass", type="string", length=255)
     */
    private $currentClass;

    /**
     * @var string
     *
     * @ORM\Column(name="waecIndexNo", type="string", length=255)
     */
    private $waecIndexNo;

    /**
     * @var string
     *
     * @ORM\Column(name="hometown", type="string", length=255)
     */
    private $hometown;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="region", type="string", length=255)
     */
    private $region;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=255)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="formerSchool", type="string", length=255)
     */
    private $formerSchool;

    /**
     * @var string
     *
     * @ORM\Column(name="programme", type="string", length=255)
     */
    private $programme;

    /**
     * @var string
     *
     * @ORM\Column(name="house", type="string", length=255)
     */
    private $house;

    /**
     * @var string
     *
     * @ORM\Column(name="nationality", type="string", length=255)
     */
    private $nationality;

    /**
     * @var string
     *
     * @ORM\Column(name="dateAdmitted", type="string", length=255)
     */
    private $dateAdmitted;

    /**
     * @var string
     *
     * @ORM\Column(name="parentName", type="string", length=255)
     */
    private $parentName;

    /**
     * @var string
     *
     * @ORM\Column(name="parentAddress", type="string", length=255)
     */
    private $parentAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="parentPhone", type="string", length=255)
     */
    private $parentPhone;

    /**
     * @var string
     *
     * @ORM\Column(name="parentEmail", type="string", length=255)
     */
    private $parentEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="studentLivesWith", type="string", length=255)
     */
    private $studentLivesWith;

    /**
     * @var string
     *
     * @ORM\Column(name="schoolarship", type="string", length=255)
     */
    private $schoolarship;

    /**
     * @var string
     *
     * @ORM\Column(name="subjectCombination", type="string", length=255)
     */
    private $subjectCombination;

    /**
     * @var string
     *
     * @ORM\Column(name="yearGroup", type="string", length=255)
     */
    private $yearGroup;

    /**
     * @var string
     *
     * @ORM\Column(name="issues", type="string", length=255)
     */
    private $issues;

    /**
     * @var string
     *
     * @ORM\Column(name="termBill", type="decimal", precision=10, scale=0)
     */
    private $termBill;

    /**
     * @var string
     *
     * @ORM\Column(name="ptaOwing", type="decimal", precision=3, scale=3)
     */
    private $ptaOwing;

    /**
     * @var string
     *
     * @ORM\Column(name="academicBillOwing", type="decimal", precision=6, scale=6)
     */
    private $academicBillOwing;

    /**
     * @var string
     *
     * @ORM\Column(name="disabilty", type="string", length=255)
     */
    private $disabilty;

    /**
     * @var string
     *
     * @ORM\Column(name="residenceStatus", type="string", length=255)
     */
    private $residenceStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="religion", type="string", length=255)
     */
    private $religion;

    /**
     * @var string
     *
     * @ORM\Column(name="bloodGroup", type="string", length=255)
     */
    private $bloodGroup;

    /**
     * @var string
     *
     * @ORM\Column(name="sickling", type="string", length=255)
     */
    private $sickling;

    /**
     * @var string
     *
     * @ORM\Column(name="nhisNo", type="string", length=255)
     */
    private $nhisNo;

     

    /**
     * @var string
     *
     * @ORM\Column(name="parentOccupation", type="string", length=255)
     */
    private $parentOccupation;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="boardingOwing", type="decimal", precision=6, scale=6)
     */
    private $boardingOwing;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     *
     * @return Student
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set surname
     *
     * @param string $surname
     *
     * @return Student
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * Get surname
     *
     * @return string
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Set fullName
     *
     * @param string $fullName
     *
     * @return Student
     */
    public function setFullName($fullName)
    {
        $this->fullName = $fullName;

        return $this;
    }

    /**
     * Get fullName
     *
     * @return string
     */
    public function getFullName()
    {
        return $this->fullName;
    }

    /**
     * Set dob
     *
     * @param string $dob
     *
     * @return Student
     */
    public function setDob($dob)
    {
        $this->dob = $dob;

        return $this;
    }

    /**
     * Get dob
     *
     * @return string
     */
    public function getDob()
    {
        return $this->dob;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Student
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set gender
     *
     * @param string $gender
     *
     * @return Student
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set indexNo
     *
     * @param string $indexNo
     *
     * @return Student
     */
    public function setIndexNo($indexNo)
    {
        $this->indexNo = $indexNo;

        return $this;
    }

    /**
     * Get indexNo
     *
     * @return string
     */
    public function getIndexNo()
    {
        return $this->indexNo;
    }

    /**
     * Set age
     *
     * @param integer $age
     *
     * @return Student
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return int
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set othernames
     *
     * @param string $othernames
     *
     * @return Student
     */
    public function setOthernames($othernames)
    {
        $this->othernames = $othernames;

        return $this;
    }

    /**
     * Get othernames
     *
     * @return string
     */
    public function getOthernames()
    {
        return $this->othernames;
    }

    /**
     * Set studentType
     *
     * @param string $studentType
     *
     * @return Student
     */
    public function setStudentType($studentType)
    {
        $this->studentType = $studentType;

        return $this;
    }

    /**
     * Get studentType
     *
     * @return string
     */
    public function getStudentType()
    {
        return $this->studentType;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return Student
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set classAdmitted
     *
     * @param string $classAdmitted
     *
     * @return Student
     */
    public function setClassAdmitted($classAdmitted)
    {
        $this->classAdmitted = $classAdmitted;

        return $this;
    }

    /**
     * Get classAdmitted
     *
     * @return string
     */
    public function getClassAdmitted()
    {
        return $this->classAdmitted;
    }

    /**
     * Set currentClass
     *
     * @param string $currentClass
     *
     * @return Student
     */
    public function setCurrentClass($currentClass)
    {
        $this->currentClass = $currentClass;

        return $this;
    }

    /**
     * Get currentClass
     *
     * @return string
     */
    public function getCurrentClass()
    {
        return $this->currentClass;
    }

    /**
     * Set waecIndexNo
     *
     * @param string $waecIndexNo
     *
     * @return Student
     */
    public function setWaecIndexNo($waecIndexNo)
    {
        $this->waecIndexNo = $waecIndexNo;

        return $this;
    }

    /**
     * Get waecIndexNo
     *
     * @return string
     */
    public function getWaecIndexNo()
    {
        return $this->waecIndexNo;
    }

    /**
     * Set hometown
     *
     * @param string $hometown
     *
     * @return Student
     */
    public function setHometown($hometown)
    {
        $this->hometown = $hometown;

        return $this;
    }

    /**
     * Get hometown
     *
     * @return string
     */
    public function getHometown()
    {
        return $this->hometown;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return Student
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set region
     *
     * @param string $region
     *
     * @return Student
     */
    public function setRegion($region)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Get region
     *
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Set phone
     *
     * @param string $phone
     *
     * @return Student
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set formerSchool
     *
     * @param string $formerSchool
     *
     * @return Student
     */
    public function setFormerSchool($formerSchool)
    {
        $this->formerSchool = $formerSchool;

        return $this;
    }

    /**
     * Get formerSchool
     *
     * @return string
     */
    public function getFormerSchool()
    {
        return $this->formerSchool;
    }

    /**
     * Set programme
     *
     * @param string $programme
     *
     * @return Student
     */
    public function setProgramme($programme)
    {
        $this->programme = $programme;

        return $this;
    }

    /**
     * Get programme
     *
     * @return string
     */
    public function getProgramme()
    {
        return $this->programme;
    }

    /**
     * Set house
     *
     * @param string $house
     *
     * @return Student
     */
    public function setHouse($house)
    {
        $this->house = $house;

        return $this;
    }

    /**
     * Get house
     *
     * @return string
     */
    public function getHouse()
    {
        return $this->house;
    }

    /**
     * Set nationality
     *
     * @param string $nationality
     *
     * @return Student
     */
    public function setNationality($nationality)
    {
        $this->nationality = $nationality;

        return $this;
    }

    /**
     * Get nationality
     *
     * @return string
     */
    public function getNationality()
    {
        return $this->nationality;
    }

    /**
     * Set dateAdmitted
     *
     * @param string $dateAdmitted
     *
     * @return Student
     */
    public function setDateAdmitted($dateAdmitted)
    {
        $this->dateAdmitted = $dateAdmitted;

        return $this;
    }

    /**
     * Get dateAdmitted
     *
     * @return string
     */
    public function getDateAdmitted()
    {
        return $this->dateAdmitted;
    }

    /**
     * Set parentName
     *
     * @param string $parentName
     *
     * @return Student
     */
    public function setParentName($parentName)
    {
        $this->parentName = $parentName;

        return $this;
    }

    /**
     * Get parentName
     *
     * @return string
     */
    public function getParentName()
    {
        return $this->parentName;
    }

    /**
     * Set parentAddress
     *
     * @param string $parentAddress
     *
     * @return Student
     */
    public function setParentAddress($parentAddress)
    {
        $this->parentAddress = $parentAddress;

        return $this;
    }

    /**
     * Get parentAddress
     *
     * @return string
     */
    public function getParentAddress()
    {
        return $this->parentAddress;
    }

    /**
     * Set parentPhone
     *
     * @param string $parentPhone
     *
     * @return Student
     */
    public function setParentPhone($parentPhone)
    {
        $this->parentPhone = $parentPhone;

        return $this;
    }

    /**
     * Get parentPhone
     *
     * @return string
     */
    public function getParentPhone()
    {
        return $this->parentPhone;
    }

    /**
     * Set parentEmail
     *
     * @param string $parentEmail
     *
     * @return Student
     */
    public function setParentEmail($parentEmail)
    {
        $this->parentEmail = $parentEmail;

        return $this;
    }

    /**
     * Get parentEmail
     *
     * @return string
     */
    public function getParentEmail()
    {
        return $this->parentEmail;
    }

    /**
     * Set studentLivesWith
     *
     * @param string $studentLivesWith
     *
     * @return Student
     */
    public function setStudentLivesWith($studentLivesWith)
    {
        $this->studentLivesWith = $studentLivesWith;

        return $this;
    }

    /**
     * Get studentLivesWith
     *
     * @return string
     */
    public function getStudentLivesWith()
    {
        return $this->studentLivesWith;
    }

    /**
     * Set schoolarship
     *
     * @param string $schoolarship
     *
     * @return Student
     */
    public function setSchoolarship($schoolarship)
    {
        $this->schoolarship = $schoolarship;

        return $this;
    }

    /**
     * Get schoolarship
     *
     * @return string
     */
    public function getSchoolarship()
    {
        return $this->schoolarship;
    }

    /**
     * Set subjectCombination
     *
     * @param string $subjectCombination
     *
     * @return Student
     */
    public function setSubjectCombination($subjectCombination)
    {
        $this->subjectCombination = $subjectCombination;

        return $this;
    }

    /**
     * Get subjectCombination
     *
     * @return string
     */
    public function getSubjectCombination()
    {
        return $this->subjectCombination;
    }

    /**
     * Set yearGroup
     *
     * @param string $yearGroup
     *
     * @return Student
     */
    public function setYearGroup($yearGroup)
    {
        $this->yearGroup = $yearGroup;

        return $this;
    }

    /**
     * Get yearGroup
     *
     * @return string
     */
    public function getYearGroup()
    {
        return $this->yearGroup;
    }

    /**
     * Set issues
     *
     * @param string $issues
     *
     * @return Student
     */
    public function setIssues($issues)
    {
        $this->issues = $issues;

        return $this;
    }

    /**
     * Get issues
     *
     * @return string
     */
    public function getIssues()
    {
        return $this->issues;
    }

    /**
     * Set termBill
     *
     * @param string $termBill
     *
     * @return Student
     */
    public function setTermBill($termBill)
    {
        $this->termBill = $termBill;

        return $this;
    }

    /**
     * Get termBill
     *
     * @return string
     */
    public function getTermBill()
    {
        return $this->termBill;
    }

    /**
     * Set ptaOwing
     *
     * @param string $ptaOwing
     *
     * @return Student
     */
    public function setPtaOwing($ptaOwing)
    {
        $this->ptaOwing = $ptaOwing;

        return $this;
    }

    /**
     * Get ptaOwing
     *
     * @return string
     */
    public function getPtaOwing()
    {
        return $this->ptaOwing;
    }

    /**
     * Set academicBillOwing
     *
     * @param string $academicBillOwing
     *
     * @return Student
     */
    public function setAcademicBillOwing($academicBillOwing)
    {
        $this->academicBillOwing = $academicBillOwing;

        return $this;
    }

    /**
     * Get academicBillOwing
     *
     * @return string
     */
    public function getAcademicBillOwing()
    {
        return $this->academicBillOwing;
    }

    /**
     * Set disabilty
     *
     * @param string $disabilty
     *
     * @return Student
     */
    public function setDisabilty($disabilty)
    {
        $this->disabilty = $disabilty;

        return $this;
    }

    /**
     * Get disabilty
     *
     * @return string
     */
    public function getDisabilty()
    {
        return $this->disabilty;
    }

    /**
     * Set residenceStatus
     *
     * @param string $residenceStatus
     *
     * @return Student
     */
    public function setResidenceStatus($residenceStatus)
    {
        $this->residenceStatus = $residenceStatus;

        return $this;
    }

    /**
     * Get residenceStatus
     *
     * @return string
     */
    public function getResidenceStatus()
    {
        return $this->residenceStatus;
    }

    /**
     * Set religion
     *
     * @param string $religion
     *
     * @return Student
     */
    public function setReligion($religion)
    {
        $this->religion = $religion;

        return $this;
    }

    /**
     * Get religion
     *
     * @return string
     */
    public function getReligion()
    {
        return $this->religion;
    }

    /**
     * Set bloodGroup
     *
     * @param string $bloodGroup
     *
     * @return Student
     */
    public function setBloodGroup($bloodGroup)
    {
        $this->bloodGroup = $bloodGroup;

        return $this;
    }

    /**
     * Get bloodGroup
     *
     * @return string
     */
    public function getBloodGroup()
    {
        return $this->bloodGroup;
    }

    /**
     * Set sickling
     *
     * @param string $sickling
     *
     * @return Student
     */
    public function setSickling($sickling)
    {
        $this->sickling = $sickling;

        return $this;
    }

    /**
     * Get sickling
     *
     * @return string
     */
    public function getSickling()
    {
        return $this->sickling;
    }

    /**
     * Set nhisNo
     *
     * @param string $nhisNo
     *
     * @return Student
     */
    public function setNhisNo($nhisNo)
    {
        $this->nhisNo = $nhisNo;

        return $this;
    }

    /**
     * Get nhisNo
     *
     * @return string
     */
    public function getNhisNo()
    {
        return $this->nhisNo;
    }

    
    /**
     * Set parentOccupation
     *
     * @param string $parentOccupation
     *
     * @return Student
     */
    public function setParentOccupation($parentOccupation)
    {
        $this->parentOccupation = $parentOccupation;

        return $this;
    }

    /**
     * Get parentOccupation
     *
     * @return string
     */
    public function getParentOccupation()
    {
        return $this->parentOccupation;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Student
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set boardingOwing
     *
     * @param string $boardingOwing
     *
     * @return Student
     */
    public function setBoardingOwing($boardingOwing)
    {
        $this->boardingOwing = $boardingOwing;

        return $this;
    }

    /**
     * Get boardingOwing
     *
     * @return string
     */
    public function getBoardingOwing()
    {
        return $this->boardingOwing;
    }
}

