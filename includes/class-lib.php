<?php

  class Person {
    var $firstName;
    function get_firstName() {
      return $this->firstName;
    }
    var $lastName;
    function get_lastName() {
      return $this->lastName;
    }
    var $fullName;
    function __construct($Persons_firstName,$Persons_lastName) {
      $this->firstName = $Persons_firstName;
      $this->lastName = $Persons_lastName;
      $this->fullName = $this->firstName." ".$this->lastName;
    }
    function get_fullName() {
      return $this->fullName;
    }
    // var $jobTitle;
    // function set_jobTitle($Persons_jobTitle) {
      // $this->jobTitle = $Persons_jobTitle;
    // }
    // function get_jobTitle() {
      // return $this->jobTitle;
    // }
    // var $orgName;
    // function set_orgName($Persons_orgName) {
      // $this->orgName = $Persons_orgName;
    // }
    // function get_orgName() {
      // return $this->orgName;
    // }
    // var $workEmail;
    // function set_workEmail($Persons_workEmail) {
      // $this->workEmail = $Persons_workEmail;
    // }
    // function get_workEmail() {
      // return $this->workEmail;
    // }
    // var $linkedIn;
    // function set_linkedIn($Persons_linkedIn) {
      // $this->linkedIn = $Persons_linkedIn;
    // }
    // function get_linkedIn() {
      // return $this->linkedIn;
    // }
    // var $twitter;
    // function set_linkedIn($Persons_twitter) {
      // $this->twitter = $Persons_twitter;
    // }
    // function get_twitter() {
      // return $this->twitter;
    //}
  }

?>