<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Employees
 *
 * @ORM\Table(name="EMPLOYEES")
 * @ORM\Entity
 */
class Employees
{
    /**
     * @var integer
     *
     * @ORM\Column(name="DEPARTMENT_ID", type="integer", nullable=true)
     */
    private $departmentId;

    /**
     * @var string
     *
     * @ORM\Column(name="FIRST_NAME", type="string", length=20, nullable=true)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="LAST_NAME", type="string", length=20, nullable=true)
     */
    private $lastName;

    /**
     * @var integer
     *
     * @ORM\Column(name="MANAGER_ID", type="integer", nullable=true)
     */
    private $managerId;

    /**
     * @var integer
     *
     * @ORM\Column(name="SALARY", type="integer", nullable=true)
     */
    private $salary;

    /**
     * @var integer
     *
     * @ORM\Column(name="EMPLOYEE_ID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="EMPLOYEES_EMPLOYEE_ID_seq", allocationSize=1, initialValue=1)
     */
    private $employeeId;

	
	public function setDepartmentId($departmentId)
	{
		$this->departmentId = $departmentId;
		
		return $this;
	}
	
	public function getDepartmentId()
	{
		return $this->departmentId;
	}
	
	
	public function setFirstName($firstName)
	{
		$this->firstName = $firstName;
		
		return $this;
	}
	
	public function getFirstName()
	{
		return $this->firstName;
	}
	
	
	public function setLastName($lastName)
	{
		$this->lastName = $lastName;
		
		return $this;
	}
	
	public function getLastName()
	{
		return $this->lastName;
	}
	
	
	public function setManagerId($managerId)
	{
		$this->managerId = $managerId;
		
		return $this;
	}
	
	public function getManagerId()
	{
		return $this->managerId;
	}
	
	
	public function setSalary($salary)
	{
		$this->salary = $salary;
		
		return $this;
	}
	
	public function getSalary()
	{
		return $this->salary;
	}
	
	public function getEmployeeId()
	{
		return $this->employeeId;
	}
}

