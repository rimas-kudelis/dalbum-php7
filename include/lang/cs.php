<?php

/*  DAlbum Czech language support file

    (c) Copyright 2003 by Lubor Kemza

    Permission is hereby granted, free of charge, to any person obtaining a
    copy of this software and associated documentation files (the "Software"),
    to deal in the Software without restriction, including without limitation
    the rights to use, copy, modify, merge, publish, distribute, sublicense,
    and/or sell copies of the Software, and to permit persons to whom the
    Software is furnished to do so, subject to the following conditions:

    The above copyright notice and this permission notice shall be included
    in all copies or substantial portions of the Software.

    THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS
    OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
    ITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
    AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
    LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
    FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER
    DEALINGS IN THE SOFTWARE.
*/

$newlang=array(

    ///////////////////////////////
    // Index.php
    ///////////////////////////////
    'loginBtn'          => 'P�ihl�sit',
    'loginBtnTitle'     => 'P�ihl�sit',

    'logoutBtn'         => 'Odhl�sit',
    'logoutBtnTitle'    => 'Odhl�sit',

    'reindexBtn'        => 'Reindexace',
    'reindexBtnTitle'   => 'Hled�n� nov�ch obr�zk� a obnova datab�ze informac� o obr�zc�ch programu DAlbum',

    'usrmgrBtn'         => 'U�ivatel�',
    'usrmgrBtnTitle'    => 'P�idat/odebrate u�ivatele a zm�nit hesla',

    'closeWindowBtn'        => 'Zav��t okno',
    'closeWindowBtnTitle'   => 'Zav��t toto okno',

    'fullScreenBtn'         => 'Na celou obrazovku',
    'fullScreenBtnTitle'    => 'Otev�e tuto str�nku p�es celou obrazovku. M��ete tak� zm��knout F11...',

    'editDefBtn'        => 'Upravit',
    'editDefBtnTitle'   => 'Upravit n�zev alba, koment��e a spravovat obr�zky',

    'indexUsername'     => 'U�ivatel:',
    'page'              => 'Zobrazeno  #begin# - #end#  z #count# polo�ek. &nbsp; Str�nka: &nbsp;',
    'noimages'          => '��dn� obr�zky',
    'noPublicImages'    => 'Galerie nen� p��stupn� pro ve�ejnost. P�ihla�te se pros�m..',
    'noscript'          => 'Zobrazen� slo�ek je bohu�el viditeln� pouze se zapnutou podporou JavaScriptu ve Va�em prohl�e�i.<BR><BR>',

    'prevPageBtn'       => 'P�edchoz�',
    'prevPageBtnTitle'  => 'Na p�edchoz� str�nku (#page#)',

    'nextPageBtn'       => 'Dal��',
    'nextPageBtnTitle'  => 'Na dal�� str�nku (#page#)',

    'statusLeft'        => '<b>#TotalImages#</b> obr�zk� v <b>#TotalAlbums#</b> albech',
    'statusRight'       => '<a href="http://www.dalbum.org">Vytvo�eno programem DAlbum #version# &copy; 2003 DeltaX Inc. in #elapsed# s</a>',

    // Common stuff
    'mainPage'      => 'Na hlavn� str�nku',
    'username'      => 'U�ivatel:',
    'password'      => 'Heslo:',
    'bytes'         => 'byt�',
    'KB'            => 'KB',
    'MB'            => 'MB',
    'pixels'        => 'pixel�',
    'errorReturn'   => 'Zp�t na p�edchoz� str�nku',

    /// Login.php
    'loginTitle'            => 'Login to #title#',
    'loginAuthError'        => 'Chyba p�ihl�en�',
    'loginBadUserName'      => 'Va�e u�ivatelsk� jm�no nebo heslo nebylo nalezeno v datab�zi',
    'loginAgain'            => 'Nov� p�ihl�en�',
    'loginNoCookiesWarning' => '<HR><B>Pozor: Ve Va�em prohl�e�i m�te vypnut� Cookies!</B><BR>Pokud chcete pokra�ovat, mus�te si podporu Cookies povolit.<BR>Povolte podporu cookies ve vlastnostech sv�ho prohl�e�e a obnovte str�nku.<BR><HR>',
    'loginLoginBtn'         => 'P�ihl�sit',
    'loginCancelBtn'        => 'Zru�it',

    // pass.php
    'passTitle'             => 'Spr�va u�ivatel�',
    'passUserExists'        => '�ivatel #user# ji� existuje.',
    'passNotMatch'          => 'Hesla vz�jemn� nesouhlas�.',
    'passNoUserSelected'    => 'Nebyl vybr�n u�ivatel.',
    'passNoAdminDelete'     => 'Hlavn� spr�vce DAlbum nem��e b�t odstran�n.',
    'passWriteError'        => 'Nelze otev��t soubor hesel na z�pis!',
    'passError'             => '<B>Chyba: </B>#error#',
    'passAddBtn'            => 'P�idat',
    'passDeleteBtn'         => 'Odstranit',
    'passChangePwdBtn'      => 'Zm�nit heslo',
    'passCloseBtn'          => 'Zav��t',
    'passCancelBtn'         => 'Zru�it',

    'passAddUserDlgTitle'   => 'P�idat u�ivatele',
    'passChangePwdDlgTitle' => 'Zm�nit heslo',
    'passConfirmPassword'   => 'Potvrdit heslo:',

    // showimg.php
    'showPrevBtn'       => 'P�edchoz�',
    'showPrevBtnTitle'  => 'Uk�zat p�edchoz� obr�zek',

    'showNextBtn'       => 'Dal��',
    'showNextBtnTitle'  => 'Uk�zat dal�� obr�zek',

    'showIndexBtn'      => 'Seznam',
    'showIndexBtnTitle' => 'Zp�t na seznam alb',

    'showImageBtn'      => 'Uk�zat obr�zek',
    'showImageBtnTitle' => 'Uk�zat v nov�m okn� pouze obr�zek',

    'showHiResBtn'      => 'P�vodn� obr�zek (#size#)',
    'showHiResBtnTitle' => 'Uk�zat p�vodn� obr�zek ve vysok�m rozli�en� v nov�m okn�',

    'showShowDetailsBtn'      => 'Uk�zat detaily',
    'showShowDetailsBtnTitle' => 'UK�ZAT EXIF detaily: Datum, rychlost zobrazen� apod. (Je-li to mo�n�)',

    'showHideDetailsBtn'      => 'Skr�t detaily',
    'showHideDetailsBtnTitle' => 'Skr�t EXIF detaily',

    'showRotateBtn'       => 'Oto�it',
    'showRotateBtnTitle'  => 'Oto�it o 90 stup�� ve sm�ru hodinov�ch ru�i�ek',

    'showUpdateBtn'       => 'Obnovit',
    'showUpdateBtnTitle'  => 'Vygenerov�n� obr�zku se zm�n�nou velikost� a n�hled�',

    'showExifFilename'    => 'N�zev souboru: ',
    'showExifFilesize'    => 'Velikost souboru: ',
    'showExifResolution'  => 'Rozli�en�: ',
    'showExifDateFormat'  => '%a, %d %B %Y %H:%M:%S',
    'showExifDate'        => 'Datum: ',
    'showExifCamera'      => 'Model fotoapar�tu: ',
    'showExifExposure'    => 'Expozice: ',
    'showExifAperture'    => 'Clona: ',
    'showExifFocalLength' => 'Ohniskov� vzd�lenost: ',
    'showExifFlashYes'    => 'Ano',
    'showExifFlashNo'     => 'Ne',
    'showExifFlash'       => 'Pou�it� blesku: ',
    'showExifDialogTitle' => 'Detaily origin�ln�ho obr�zku',
    'showExifDialogTitle' => 'Detaily origin�ln�ho obr�zku',

    'showImageTitleImage'   => 'Klikn�te pro zobrazen� dal��ho obr�zku: #image#',
    'showImageTitleIndex'   => 'Klikn�te pro n�vrat do seznamu alb',


    // edit*.php
    'editTitle'         => 'Upravit #filename#',
    'editDlgTitle'      => 'Konfigura�n� soubor alba',
    'editFileLocation'  => 'Um�st�n� souboru',

    'editEditAsTextBtn'     => 'Upravit jako text',
    'editEditAsTextBtnTitle'=> 'Upravit soubor jako �ist� text',
    'editReindexNote'       => 'Nezapome�te spustit reindexaci po zm�n� nastaven� rozm�r� obr�zku',

    'editAlbumTitle'      => 'N�zev Alba:',
    'editAlbumDate'       => 'Datum:',
    'editAlbumComment'    => 'Popis:',
    'editAlbumTitleImage' => 'N�zev obr�zku:',
    'editAlbumDefault'    => 'V�choz� album',
    'editAlbumUsers'      => 'Povolen� u�ivatel�:',
    'editAlbumUsersNote'  => '(seznam u�ivatel� odd�len�ch ��rkou, pr�zdn� pole nebo  <B>all</B> = anonymn� p��stup, <B>valid-user</B>=v�ichni p�ihl�en� u�ivatel�)',

    'editCancelBtn'     => 'Zru�it',
    'editSaveBtn'       => 'Ulo�it',

    'editThumbLink'       => '#filename# (Otev�en� v nov�m okn�)',
    'editImgFilename'     => 'Soubor<BR><small>(zm�nit n�zev nebo smazat)</small>:',
    'editImgTitle'        => 'N�zev:',
    'editImgComment'      => 'Popis:',
    'editImgResize'       => 'Zm�nit velikost obr�zku',
    'editNewFileMessage'  => '( nov� soubor )',
    'editTop'             => 'Nadpis',

    'editRenameError'   => 'Nelze zm�nit n�zev souboru #filename# - �patn� p��popna souboru',
    'editSaveError'     => 'Nastala chyba p�i ukl�d�n� konfigura�n�ho souboru #filename#',
    'editHTMLSep'       => 'HTML (samostatn� str�nka)',
    'editHTML'          => 'HTML',
    'editText'          => 'Text',

    // reindex.php
    'reindexTitle'      => 'Reindexace programu DAlbum',
    'reindexDlgTitle'   => 'Reindexace programu DAlbum',
    'reindexDlgComment' => 'Reindexace programu DAlbum prohled�v� slo�ky s nov�mi obr�zky, vytv��� chyb�j�c� n�hledy a obnovuje and updates informace v datab�zi obr�zk�.',
    'reindexDlgSpeed'   => 'Zvolte si pros�m rychlost reindexace:',

    'reindexSpeed0'     => '<B>Rychl�</B>. Vytv��� pouze neexistuj�c� n�hledy a obr�zky se zm�n�nou velikost�. Neov��uje integritu soubor� s obr�zky.',
    'reindexSpeed1'     => '<B>Moderovan�</B>. Vytv��� pouze neexistuj�c� nebo poru�en� n�hledy a obr�zky se zm�n�nou velikost�. Ov��uje integritu soubor� s obr�zky',
    'reindexSpeed2'     => '<B>Pomal�</B>. Stejn� jako <B>Moderovan�</B>, ale nav�c ma�e neidentifikovan� n�hledy a obr�zky se zm�n�nou velikosti.',
    'reindexSpeed3'     => '<B>Ext�mn� pomal�</B>. Vytv��� znovu v�echny n�hledy a obr�zky se zm�n�nou velikost�. Pozor:: to m��e trvat n�kolik hodin!',

    'reindexCancelBtn'  => 'Zru�it',
    'reindexStartBtn'   => 'Start',

    'reindexProgressTitle'  => 'Prob�h� reindexace programu DAlbum',

    'reindexError'      => 'Nastala chyba p�i vytv��en� n�hledu pro obr�zek',
    'reindexRetry'      => 'Opakovat reindexaci na obr�zkus chybou',
    'reindexIgnore'     => 'Ignorovat chybu a pokra�ovat',
    'reindexAgain'      => 'Spustit reindexaci znovu',

    'reindexMainImageProblem'   => 'Probl�m p�i nahr�v�n� souboru',
    'reindexResizedProblem'     => 'Probl�m se zm�nou velikosti obr�zku',
    'reindexThumbProblem'       => 'Probl�m p�i vytv��en� n�hledu',

    'reindexCompleted'        => '<P>�loha dokon�ena.</P><P>Reindexace trvala #elapsed# sekund. Stomov� struktura alb byla vytvo�ena za #treeelapsed# sekund.</P>',
    'reindexStats'            => 'DAlbum statistika',
    'reindexStatsAlbums'      => 'Po�et alb:',
    'reindexStatsImages'      => 'Po�et obr�zk�:',
    'reindexStatsOrigSize'    => 'Celkov� velikost p�vodn�ch obr�zk�:',
    'reindexStatsResizedSize' => 'Celkov� velikost obr�zk� se zm�n�nou velikost�:',
    'reindexStatsThumbSize'   => 'Celkov� velikost n�hled�:',

    'reindexStatusErrors'   => '<B>V�sledek: </B>Bylo nalezeno #errors# chyb.',

    'reindexStatusOK'   => '<B>V�sledek: </B> �sp�n� zakon�en� - bez chyb.',
    'reindexSaveError'  => '<B>Chyba: </B>Nelze ulo�it #filename#',

    'reindexTHFilename' => 'Soubor',
    'reindexTHProblem'  => 'Probl�m',

    // customizations

    // Image comments
    'cCommentsImageComments'        => 'Koment�� obr�zku',
    'cCommentsLoginToAddComments'   => 'K vlo�en� Va�ich koment��� #loginbutton#.<BR>&nbsp;',
    'cCommentsYourName'             => 'Va�e jm�no:',
    'cCommentsComment'              => 'Koment��:',
    'cCommentsSendButtonText'       => 'Odeslat',
    'cCommentsDeleteButtonText'     => 'Smazat',
    'cCommentsMailSubject'          => 'Nov� koment�� obr�zku #image# ( Z alba: #album# )',
    'cCommentsMailBody'             => "Nov� koment�� byl odesl�n u�ivatelem #user#, IP: #ip#, DNS: #dns#\n\n#body#\n\nPage URL: #url#\n",
    'cCommentsDateFormat'           => 'F j, Y, g:i a',

    // Slide show
    'cSlideshowSlideshow'           => '-- Prezentace --',
    'cSlideshowSeconds'             => '#sec# sekund',
    'cSlideshowStopTitle'           => 'Klikn�te pro zastaven� prezentace',
    
    // Exif line (must be short)
    'cExiflineISOSpeedRatings'      => 'ISO:',
    'cExiflineExposure'             => 'E:',
    'cExiflineAperture'             => 'A:',
    'cExiflineFlash'                => 'Blesk:',
    'cExiflineDateFormat'           => '%d %B %Y %H:%M:%S',
    'cExiflineFocal'                => 'F:',

    // Custom file types
    'cCustomClickToOpen'            => 'Klikn�te pro otev�en� "#title#"',
    'cCustomOpenBtn'                => 'Otev��t soubor',
    'cCustomOpenBtnTitle'           => 'Otev��t soubor "#title#" v aktu�ln�m okn�',

    // Highligh modified albums
    'cModifiedNew'                  => 'nov�!',
    'cModifiedUpdated'              => 'aktualizovan�!',

    // ZIP
    'cZipBtn'                    => 'St�hnout jako ZIP archiv (#size#)',
    'cZipBtnTitle'               => 'St�hnout cel� album jako ZIP archiv (#size#)',
    
    ''  => ''
);

?>
