<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\View\View;
use AppBundle\Entity\Employees;

class EmployeesController extends FOSRestController
{
	
	/**
	* @Rest\Get("/employee")
	*/
	public function getAction()
	{
		
		$employees = $this->getDoctrine()->getRepository('AppBundle:Employees')->findAll();
		
		if ($employees === null) {
			return new View("There are no employees exist", Response::HTTP_NOT_FOUND);
		}
        
        return $employees;
	}
	
	/**
	* @Rest\Get("/employee/{id}")
	*/
	public function idAction($id)
	{
		
		$employee = $this->getDoctrine()->getRepository('AppBundle:Employees')->find($id);
		
		if ($employee === null) {
			return new View("Employee not found", REsponse::HTTP_NOT_FOUND);
		}
		
		return $employee;
		
	}
	
	/**
	* @Rest\Post("/employee")
	*/
	public function postAction(Request $request)
	{
		$employee = new Employees;
		$employee->setFirstName($request->get('firstName'));
		$employee->setLastName($request->get('lastName'));
		$employee->setSalary($request->get('salary'));
		$employee->setManagerId($request->get('managerId'));
		$employee->setDepartmentId($request->get('departmentId'));
		
		if (empty($employee->getFirstName()) || empty($employee->getLastName() || empty($employee->getSalary)))
		{
			return new View("Null values are not allowed", Response::HTTP_NOT_ACCEPTABLE);
		}
		
		$em = $this->getDoctrine()->getManager();
		$em->persist($employee);
		$em->flush();
		
		return new View("Employee added successfully", Response::HTTP_OK);
	}
	
	/**
	* @Rest\Put("/employee/{id}")
	*/
	public function putAction($id, Request $request)
	{
		$employee = $this->getDoctrine()->getRepository('AppBundle:Employees')->find($id);
		$em = $this->getDoctrine()->getManager();
		
		if (empty($employee))
		{
			return new View("Employee not found", Response::HTTP_NOT_FOUND);
		}
		elseif (empty($request->get('firstName')) || empty($request->get('lastName')) || empty($request->get('salary')))
		{
			return new View("Null values are not allowed", Response::HTTP_NOT_ACCEPTABLE);
		}
		else
		{
			$employee->setFirstName($request->get('firstName'));
			$employee->setLastName($request->get('lastName'));
			$employee->setSalary($request->get('salary'));
			$employee->setDepartmentId($request->get('departmentId'));
			$employee->setManagerId($request->get('managerId'));
			
			$em->flush();
			
			return new View("Employee updated successfully", Response::HTTP_OK);
		}
	}
	
	/**
	* @Rest\Delete("/employee/{id}")
	*/
	public function deleteAction($id)
	{
		$employee = $this->getDoctrine()->getRepository('AppBundle:Employees')->find($id);
		
		if (empty($employee)) {
			return new View("Employee not found", Response::HTTP_NOT_FOUND);
		}
		else {
			$em = $this->getDoctrine()->getManager();
			$em->remove($employee);
			$em->flush();
		}
		
		return new View("Employee deleted successfully", Response::HTTP_OK);
	}
	
}