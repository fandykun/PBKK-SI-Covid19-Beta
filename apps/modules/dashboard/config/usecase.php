<?php

use Kun\Dashboard\Core\Application\Service\AddAnnouncement\AddAnnouncementService;
use Kun\Dashboard\Core\Application\Service\AddPasien\AddPasienService;
use Kun\Dashboard\Core\Application\Service\AddUser\AddUserService;
use Kun\Dashboard\Core\Application\Service\DeletePasien\DeletePasienService;
use Kun\Dashboard\Core\Application\Service\EditPasien\EditPasienService;
use Kun\Dashboard\Core\Application\Service\FindPasienById\FindPasienByIdService;
use Kun\Dashboard\Core\Application\Service\FindUserById\FindUserByIdService;
use Kun\Dashboard\Core\Application\Service\GetAllAnnouncement\GetAllAnnouncementService;
use Kun\Dashboard\Core\Application\Service\GetAllPasien\GetAllPasienService;
use Kun\Dashboard\Core\Application\Service\GetAllProvince\GetAllProvinceService;
use Kun\Dashboard\Core\Application\Service\GetAllStatusCovid19\GetAllStatusCovid19Service;
use Kun\Dashboard\Core\Application\Service\GetDistricts\GetDistrictsService;
use Kun\Dashboard\Core\Application\Service\GetLastAnnouncement\GetLastAnnouncementService;
use Kun\Dashboard\Core\Application\Service\GetRegencies\GetRegenciesService;
use Kun\Dashboard\Core\Application\Service\LoginUser\LoginUserService;

//=================
//-----User Usecase
//=================
$di->set('findUserByIdService', function() use ($di) {
    return new FindUserByIdService($di->get('sqlServerUserRepository'));
});

$di->set('loginUserService', function() use ($di) {
    return new LoginUserService($di->get('sqlServerUserRepository'));
});

$di->set('addUserService', function() use ($di) {
    return new AddUserService($di->get('sqlServerUserRepository'));
});

//=========================
//-----Announcement Usecase
//=========================
$di->set('addAnnouncementService', function() use ($di) {
    return new AddAnnouncementService($di->get('sqlServerAnnouncementRepository'));
});

$di->set('getLastAnnouncementService', function() use ($di) {
    return new GetLastAnnouncementService($di->get('sqlServerAnnouncementRepository'));
});

$di->set('getAllAnnouncementService', function() use ($di) {
    return new GetAllAnnouncementService($di->get('sqlServerAnnouncementRepository'));
});

//===================
//-----Pasien Usecase
//===================
$di->set('addPasienService', function() use ($di) {
    return new AddPasienService($di->get('sqlServerPasienRepository'));
});

$di->set('findPasienByIdService', function() use ($di) {
    return new FindPasienByIdService($di->get('sqlServerPasienRepository'));
});

$di->set('editPasienService', function() use ($di) {
    return new EditPasienService($di->get('sqlServerPasienRepository'));
});

$di->set('getAllPasienService', function() use ($di) {
    return new GetAllPasienService($di->get('sqlServerPasienRepository'));
});

$di->set('deletePasienService', function() use ($di) {
    return new DeletePasienService($di->get('sqlServerPasienRepository'));
});

//==========================
//-----StatusCovid19 Usecase
//==========================
$di->set('getAllStatusCovid19Service', function() use ($di) {
    return new GetAllStatusCovid19Service($di->get('sqlServerStatusCovid19Repository'));
});

//====================
//-----Address Usecase
//====================
$di->set('getAllProvinceService', function() use ($di) {
    return new GetAllProvinceService($di->get('sqlServerProvinceRepository'));
});

$di->set('getRegenciesService', function() use ($di) {
    return new GetRegenciesService($di->get('sqlServerRegencyRepository'));
});

$di->set('getDistrictsService', function() use ($di) {
    return new GetDistrictsService($di->get('sqlServerDistrictRepository'));
});