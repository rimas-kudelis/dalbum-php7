<?php

/*  DAlbum Slovak language support file

    (c) Copyright 2003 by Peter Mikula

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
    'loginBtn'      => 'Prihl�sit',
    'loginBtnTitle'     => 'Prihl�sit',

    'logoutBtn'         => 'Odhl�sit',
    'logoutBtnTitle'    => 'Odhl�sit',

    'reindexBtn'        => 'Reindex�cia',
    'reindexBtnTitle'   => 'Hladanie nov�ch obr�zkou a obnova datab�ze informaci� o obr�zkoch programu DAlbum',

    'usrmgrBtn'         => 'U��vatelia',
    'usrmgrBtnTitle'    => 'Pridat/odobrat u��vatela a zmenit hesl�',

    'closeWindowBtn'    => 'Zavriet okno',
    'closeWindowBtnTitle'   => 'Zavriet toto okno',

    'fullScreenBtn'     => 'Na cel� obrazovku',
    'fullScreenBtnTitle'    => 'Otvorte t�to str�nku cez celou obrazovku. M��ete tie� stla�it F11...',

    'editDefBtn'        => 'Upravit',
    'editDefBtnTitle'   => 'Upravit n�zov albumu, koment�ra a spravovat obr�zky',

    'indexUsername'     => 'U�ivatel:',
    'page'          => 'Zobrazen�  #begin# - #end#  z #count# polo�iek. &nbsp; Str�nka: &nbsp;',
    'noimages'      => '�iadne obr�zky',
    'noPublicImages'    => 'Gal�ria neni pr�stupn� pre verejnost. Prihl�ste se pros�m..',
    'noscript'      => 'Zobrazenie zlo�iek je bohu�ial vyditeln� len so zapnutou podporou JavaScriptu vo Va�om prehliada�i.<BR><BR>',

    'prevPageBtn'       => 'Predol��',
    'prevPageBtnTitle'  => 'Na predo�l� str�nku (#page#)',

    'nextPageBtn'       => 'Dal�ia',
    'nextPageBtnTitle'  => 'Na dal�iu str�nku (#page#)',

    'statusLeft'        => '<b>#TotalImages#</b> obr�zkou v <b>#TotalAlbums#</b> albumoch',
    'statusRight'       => '<a href="http://www.dalbum.org">Vytvoren� programom DAlbum #version# &copy; 2003 DeltaX Inc. in #elapsed# s</a>',

    // Common stuff
    'mainPage'      => 'Na hlavn� str�nku',
    'username'      => 'U��vatel:',
    'password'      => 'Heslo:',
    'bytes'         => 'bytov',
    'KB'            => 'KB',
    'MB'            => 'MB',
    'pixels'        => 'pixelov',
    'errorReturn'       => 'Zp�t na predo�l� str�nku',

    /// Login.php
    'loginTitle'        => 'Login to #title#',
    'loginAuthError'    => 'Chyba prihl�senia',
    'loginBadUserName'  => 'Va�e u�ivatelsk� meno alebo heslo nebolo n�jden� v datab�zi',
    'loginAgain'        => 'Nov� prihl�senie',
    'loginNoCookiesWarning' => '<HR><B>Pozor: Vo Va�om priehlada�i m�te vypnut� Cookies!</B><BR>Pokial chcete pokra�ovat, mus�te si podporu Cookies povolit.<BR>Povolte podporu cookies vo vlastnostnostiach svojho prehliada�a a obnovte str�nku.<BR><HR>',
    'loginLoginBtn'     => 'Prihl�sit',
    'loginCancelBtn'    => 'Zru�it',

    // pass.php
    'passTitle'     => 'Spr�va u��vatelov',
    'passUserExists'    => 'U��vatel #user# u� existuje.',
    'passNotMatch'      => 'Hesl� vz�jomne nes�hlasia.',
    'passNoUserSelected'    => 'Nebol vybran� u��vatel.',
    'passNoAdminDelete' => 'Hlavn� spr�vca DAlbum nem��e byt odstranen�.',
    'passWriteError'    => 'Ned� sa otvorit s�bor hesiel na z�pis!',
    'passError'     => '<B>Chyba: </B>#error#',
    'passAddBtn'        => 'Pridat',
    'passDeleteBtn'     => 'Odstranit',
    'passChangePwdBtn'  => 'Zmenit heslo',
    'passCloseBtn'      => 'Zavriet',
    'passCancelBtn'     => 'Zru�it',

    'passAddUserDlgTitle'   => 'Pridat u��vatela',
    'passChangePwdDlgTitle' => 'Zmenit heslo',
    'passConfirmPassword'   => 'Potvrdit heslo:',

    // showimg.php
    'showPrevBtn'       => 'Predo�l�',
    'showPrevBtnTitle'  => 'Uk�zat predo�l� obr�zok',

    'showNextBtn'       => 'Dal��',
    'showNextBtnTitle'  => 'Uk�zat dal�� obr�zok',

    'showIndexBtn'      => 'Zoznam',
    'showIndexBtnTitle'     => 'Zp�t na zoznam albumov',

    'showImageBtn'      => 'Uk�zat obr�zok',
    'showImageBtnTitle'     => 'Uk�zat v nov�m okne len obr�zok',

    'showHiResBtn'      => 'P�vodn� obr�zok (#size#)',
    'showHiResBtnTitle'     => 'Uk�zat p�vodn� obr�zok vo vysokom rozl�en� v novom okne',

    'showShowDetailsBtn'    => 'Uk�zat detaily',
    'showShowDetailsBtnTitle'    => 'UK�ZAT EXIF detaily: Datum, r�chlost zobrazenia apod. (Ak je to mo�n�)',

    'showHideDetailsBtn'    => 'Skryt detaily',
    'showHideDetailsBtnTitle'    => 'Skryt EXIF detaily',

    'showRotateBtn'     => 'Oto�it',
    'showRotateBtnTitle'    => 'Oto�it o 90 stup�ov v smere hodinov�ch ru�i�iek',

    'showUpdateBtn'     => 'Obnovit',
    'showUpdateBtnTitle'    => 'Vygenerovanie obr�zku so zme�enou velkostou a n�hladov',

    'showExifFilename'  => 'N�zov s�boru: ',
    'showExifFilesize'  => 'Velkost s�boru: ',
    'showExifResolution'    => 'Rozli�enie: ',
    'showExifDateFormat'    => '%a, %d %B %Y %H:%M:%S',
    'showExifDate'      => 'D�tum: ',
    'showExifCamera'    => 'Model fotoapar�tu: ',
    'showExifExposure'  => 'Expoz�cia: ',
    'showExifAperture'  => 'Clona: ',
    'showExifFocalLength'   => 'Ohniskov� vzdialenost: ',
    'showExifFlashYes'  => '�no',
    'showExifFlashNo'   => 'Nie',
    'showExifFlash'     => 'Pou�itie blesku: ',
    'showExifDialogTitle'   => 'Detaily origin�lneho obr�zku',
    'showExifDialogTitle'       => 'Detaily origin�lneho obr�zku',

    'showImageTitleImage'   => 'Kliknite pre zobrazenie dal�ieho obr�zku: #image#',
    'showImageTitleIndex'   => 'Kliknite pre n�vrat do zoznamu albumov',


    // edit*.php
    'editTitle'     => 'Upravit #filename#',
    'editDlgTitle'      => 'Konfigura�n� s�bor albumu',
    'editFileLocation'  => 'Umiestnenie s�borov',

    'editEditAsTextBtn' => 'Upravit ako text',
    'editEditAsTextBtnTitle'=> 'Upravit s�bor ako �ist� text',
    'editReindexNote'   => 'Nezabudnite spustit reindex�ciu po zmene nastavenia rozmerov obr�zku',

    'editAlbumTitle'    => 'N�zov Albumu:',
    'editAlbumDate'     => 'D�tum:',
    'editAlbumComment'  => 'Popis:',
    'editAlbumTitleImage'   => 'N�zov obr�zku:',
    'editAlbumDefault'  => 'Hlavn� album',
    'editAlbumUsers'    => 'Povolen� u��vatelia:',
    'editAlbumUsersNote'    => '(zoznam ul�vatelov oddelen�ch �iarkov, pr�zdne pole alebo  <B>all</B> = anonymn� pr�stup, <B>valid-user</B>=v�etci prihl�sen� u��vatelia)',

    'editCancelBtn'     => 'Zru�it',
    'editSaveBtn'       => 'Ulo�it',

    'editThumbLink'     => '#filename# (Otvorenie v novom okne)',
    'editImgFilename'   => 'S�bor<BR><small>(zmenit n�zov alebo zmazat)</small>:',
    'editImgTitle'      => 'N�zov:',
    'editImgComment'    => 'Popis:',
    'editImgResize'     => 'Zmenit velkost obr�zku',
    'editNewFileMessage'    => '( nov� s�bor )',
    'editTop'       => 'Nadpis',

    'editRenameError'   => 'Ned� sa zmenit n�zov s�boru #filename# - �zl� pr�pona s�boru',
    'editSaveError'     => 'Nastala chyba pri ukladan� konfigura�n�ho s�boru #filename#',
    'editHTML'      => 'HTML',
    'editText'      => 'Text',

    // reindex.php
    'reindexTitle'      => 'Reindex�cia programu DAlbum',
    'reindexDlgTitle'   => 'Reindex�cia programu DAlbum',
    'reindexDlgComment' => 'Reindex�cia programu DAlbum prehlad�va zlo�ky s nov�mi obr�zkami, vytv�ra chybaj�ce n�hlady a obnovuje inform�cie v datab�ze obr�zkov.',
    'reindexDlgSpeed'   => 'Zvolte si pros�m rychlost reindex�cie:',

    'reindexSpeed0'     => '<B>Rychl�</B>. Vytv�ra len neexistuj�ce n�hlady a obr�zky so zmenenou velkostou. Nekontroluje integritu obr�zkou.',
    'reindexSpeed1'     => '<B>Moderovan�</B>. Vytv�ra len neexistuj�ce alebo poru�en� n�hlady a obr�zky so zmenenou velkostou. Kontroluje integritu obr�zkou',
    'reindexSpeed2'     => '<B>Pomal�</B>. Rovnak� ako <B>Moderovan�</B>, ale naviac ma�e neidentifikovan� n�hlady a obr�zky so zmenenou velikosti.',
    'reindexSpeed3'     => '<B>Ext�mn� pomal�</B>. Vytv�ra znovu v�etky n�hledy a obr�zky so zmenenou velkostou. Pozor:: m��e to trvat a� niekolko hod�n!',

    'reindexCancelBtn'  => 'Zru�it',
    'reindexStartBtn'   => '�tart',

    'reindexProgressTitle'  => 'Prebieha reindex�cia programu DAlbum',

    'reindexError'      => 'Nastala chyba pri vytv�ran� n�hladu pre obr�zok',
    'reindexRetry'      => 'Opakovat reindex�ciu na obr�zku s chybou',
    'reindexIgnore'     => 'Ignorovat chybu a pokra�ovat',
    'reindexAgain'      => 'Spustit reindex�ciu znova',

    'reindexMainImageProblem'   => 'Probl�m pri nahr�van� s�boru',
    'reindexResizedProblem'     => 'Probl�m so zmenenou velkostou obr�zku',
    'reindexThumbProblem'       => 'Probl�m pri vytv�ran� n�hladu',

    'reindexCompleted'  => '<P>�loha dokon�en�.</P><P>Reindex�cia trvala #elapsed# sekund. Stromov� �trukt�ra albumov bola vytvoren� za #treeelapsed# sekund.</P>',
    'reindexStats'      => 'DAlbum �tatistika',
    'reindexStatsAlbums'    => 'Po�et albumov:',
    'reindexStatsImages'    => 'Po�et obr�zkov:',
    'reindexStatsOrigSize'  => 'Celkov� velkost p�vodn�ch obr�zkov:',
    'reindexStatsResizedSize'   => 'Celkov� velkost obr�zkov so zmenenou velkostou:',
    'reindexStatsThumbSize'     => 'Celkov� velkost n�hladov:',

    'reindexStatusErrors'   => '<B>V�sledok: </B>Na�lo sa #errors# chyb.',

    'reindexStatusOK'   => '<B>V�sledok: </B> �spe�n� zakon�enie - bez ch�b.',
    'reindexSaveError'  => '<B>Chyba: </B>Nejde ukon�it #filename#',

    'reindexTHFilename' => 'S�bor',
    'reindexTHProblem'  => 'Probl�m',

    // customizations

    // Image comments
    'cCommentsImageComments'        => 'Koment�r obr�zku',
    'cCommentsLoginToAddComments'   => 'Na vlolenie Va�ich koment�rov #loginbutton#.<BR>&nbsp;',
    'cCommentsYourName'             => 'Va�e meno:',
    'cCommentsComment'              => 'Koment�r:',
    'cCommentsSendButtonText'       => 'Odoslat',
    'cCommentsDeleteButtonText'     => 'Zmazat',
    'cCommentsMailSubject'          => 'Nov� koment�r obr�zku #image# ( Z albumu: #album# )',
    'cCommentsMailBody'             => "Nov� koment�r bol pridan� u��vatelom #user#, IP: #ip#, DNS: #dns#\n\n#body#\n\nPage URL: #url#\n",
    'cCommentsDateFormat'           => 'F j, Y, g:i a',

    // Slide show
    'cSlideshowSlideshow'           => '-- Slide show --',
    'cSlideshowSeconds'             => '#sec# sek�nd',

    // Exif line (must be short)
    'cExiflineISOSpeedRatings'      => 'ISO:',
    'cExiflineExposure'             => 'E:',
    'cExiflineAperture'             => 'A:',
    'cExiflineFlash'                => 'Blesk:',
    'cExiflineDateFormat'           => '%d %B %Y %H:%M:%S',

    // Custom file types
    'cCustomClickToOpen'            => 'Kliknite pre otvorenie "#title#"',
    'cCustomOpenBtn'                => 'Otevorit s�bor',
    'cCustomOpenBtnTitle'           => 'Otevorit s�bor "#title#" v aktu�lnom okne',

    // Highligh modified albums
    'cModifiedNew'                  => 'nov�!',
    'cModifiedUpdated'              => 'aktualizovan�!',

    ''  => ''
);

?>