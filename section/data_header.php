<?php 
$request_uri = explode('/', $_SERVER['REQUEST_URI']);
//================= ДАННЫ ДЛЯ ШАПКИ САЙТА ================\\
switch ($request_uri[1]) {
    case 'astana':
//===================АСТАНА=======================//
$city = 0;    
$ccity="Астана";//город
$ccityr="Астане";//город
$addr="г.Астана,</br> ул.Коктал 23";//адрес в шапке
$nomber1="+7(7172)40-78-78";//первый номер в шапке
$nomber2="+7-707-181-02-18";//торой номер в шапке

        break;
    case 'karaganda':
//================КАРАГАНДА==============//
$city = 1;    
$ccity="Караганда";
$ccityr="Караганде";//город
$addr="г.Караганда,</br> ул. Заславского 18";//адрес в шапке
$nomber1="+7(7172)56-09-09";//первый номер в шапке
$nomber2="+7(7212)32-49-88";//торой номер в шапке

        break;
            case 'pavlodar':
//==================== ПАВЛОДАР=====================//
$city = 2;            
$ccity="Павлодар";
$ccityr="Павлодаре";//город
$addr="г.Павлодар,</br> ул.Транспортная 35";//адрес в шапке
$nomber1="+7(7182)65-91-51";//первый номер в шапке
$nomber2="+7-701-960-67-25";//торой номер в шапке
        break;
case 'ust-kamenogorsk':
//================== UKG  ======================\\
$city = 3;
$ccity="Усть-Каменогорск";
$ccityr="Усть-Каменогорске";//город
$addr="г.Усь-Каменогорск,</br> Объездное шоссе 3/1,";//адрес в шапке
$nomber1="+7(7232)23-00-00";//первый номер в шапке
$nomber2="+7-701-960-36-83";//торой номер в шапке
        break;
 default:
$city =0;
$ccity="Казахстан";//город
$ccityr="Казахстане";//город
$addr="г.Астана,</br> ул.Коктал 23";//адрес в шапке
$nomber1="+7(7172)40-78-78";//первый номер в шапке
$nomber2="+7-707-181-02-18";//торой номер в шапке
  			break;
}

?>

