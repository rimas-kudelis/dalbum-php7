<?php

/*  DAlbum Hungarian language support file

    (c) Copyright 2005 by BandiBoy.hu

*/

$newlang=array(

    ///////////////////////////////
    // Index.php
    ///////////////////////////////
    'loginBtn'          => 'Bel�p�s',
    'loginBtnTitle'     => 'Bel�p�s',

    'logoutBtn'         => 'Kil�p�s',
    'logoutBtnTitle'    => 'Kil�p�s',

    'reindexBtn'        => '�jra indexel�s',
    'reindexBtnTitle'   => '�j k�pek keres�se �s az adatb�zis fel�l�r�sa',

    'usrmgrBtn'         => 'Felhaszn�l�k',
    'usrmgrBtnTitle'    => 'Felhaszn�l�k hozz�ad�sa/elt�v�l�t�sa �s jelszavak m�dos�t�sa',

    'closeWindowBtn'    => 'Ablak bez�r�sa',
    'closeWindowBtnTitle'=> 'Ezen ablak bez�r�sa',

    'fullScreenBtn'         => 'Teljes k�perny�',
    'fullScreenBtnTitle'    => 'A oldal megnyit�sa teljesk�perny�s ablakban. (F11)',

    'editDefBtn'            => 'Szerkeszt�s',
    'editDefBtnTitle'       => 'Az album c�m�nek �s le�r�s�nak szerkeszt�se, tov�bb� k�pek kezel�se',

    'indexUsername'         => 'Felhaszn�l�:',
    'page'                  => 'K�pek megjelen�t�se: #begin# - #end# �sszesen #count# k�p. &nbsp; Oldal: &nbsp;',
    'noimages'              => 'Nincsenek k�pek',
    'noPublicImages'        => 'Nincs publikus k�p. K�rlek, jelentkezz be!',
    'noscript'              => 'A mappan�zet csak akkor l�that�, ha a b�ng�sz�dben bekapcsolod a Javascript t�mogat�st.',

    'prevPageBtn'           => 'El�z�',
    'prevPageBtnTitle'      => 'Ugr�s az el�z� oldalra (#page#)',

    'nextPageBtn'           => 'K�vetkez�',
    'nextPageBtnTitle'      => 'Ugr�s a k�vetkez� oldalra (#page#)',

    'statusLeft'            => '<b>#TotalImages#</b> k�p <b>#TotalAlbums#</b> albumban',
    'statusRight'           => '<a href="http://www.bandiboy.hu">Creted by BandiBoy</a>',

    // Common stuff
    'mainPage'              => 'Ugr�s a f�oldalra',
    'username'              => 'Felhaszn�l�n�v:',
    'password'              => 'Jelsz�:',
    'bytes'                 => 'b�jt',
    'KB'                    => 'KB',
    'MB'                    => 'MB',
    'pixels'                => 'k�ppont',
    'errorReturn'           => 'Vissza az el�z� oldalra',

    /// Login.php
    'loginTitle'            =>  'Bejelentkez�s ide: #title#',
    'loginAuthError'        =>  'Sikertelen bel�p�s',
    'loginBadUserName'      =>  'A felhaszn�l�neved vagy jelszavad nem tal�lhat� az adatb�zisban.',
    'loginAgain'            =>  'Bel�p�s ism�t',
    'loginNoCookiesWarning' =>  '<HR><B>HIBA: a cookie-k ki vannak kapcsolva a b�ng�sz�dben!</B><BR>A m�k�d�shez be kell kapcsolni a cookie-kat.<BR>K�rlek kapcsold be a cookie-kat a b�ng�sz�d be�ll�t�sain�l, �s friss�tsd az oldalt!<BR><HR>',
    'loginLoginBtn'         => 'Bel�p�s',
    'loginCancelBtn'        => 'M�gsem',

    // pass.php
    'passTitle'             => 'Felhaszn�l� kezel�',
    'passUserExists'        => '#user# felhaszn�l� m�r l�tezik.',
    'passNotMatch'          => 'A jelsz� nem egyezik.',
    'passNoUserSelected'    => 'Nincs felhaszn�l� kiv�lasztva.',
    'passNoAdminDelete'     => 'Az els�dleges DAlbum adminisztr�tor nem t�r�lhet�.',
    'passWriteError'        => 'A jelsz� f�jl nem �rhat�!',
    'passError'             => '<B>Hiba: </B>#error#',
    'passAddBtn'            => 'Hozz�ad�s',
    'passDeleteBtn'         => 'T�rl�s',
    'passChangePwdBtn'      => 'Jelsz� megv�ltoztat�sa',
    'passCloseBtn'          => 'Bez�r',
    'passCancelBtn'         => 'M�gsem',

    'passAddUserDlgTitle'   => 'Felhaszn�l� hozz�ad�sa',
    'passChangePwdDlgTitle' => 'Jelsz� megv�ltoztat�sa',
    'passConfirmPassword'   => 'Jelsz� meger�s�t�se:',

    // showimg.php
    'showPrevBtn'           => 'El�z�',
    'showPrevBtnTitle'      => 'El�z� k�p mutat�sa',

    'showNextBtn'           => 'K�vetkez�',
    'showNextBtnTitle'      => 'K�vetkez� k�p mutat�sa',

    'showIndexBtn'          => 'Index',
    'showIndexBtnTitle'     => 'Vissza az index-hez',

    'showImageBtn'          => 'K�p mutat�sa',
    'showImageBtnTitle'     => 'K�p mutat�sa �j ablakban',

    'showHiResBtn'          => 'Eredeti (#size#)',
    'showHiResBtnTitle'     => 'Eredeti felbont�s� k�p megjelen�t�se �j ablakban',

    'showShowDetailsBtn'        => 'Adatok mutat�sa',
    'showShowDetailsBtnTitle'   => 'EXIF k�padatok mutat�sa: d�tum, shutter sebess�g stb. (ha lehets�ges)',

    'showHideDetailsBtn'        => 'Adatok rejt�se',
    'showHideDetailsBtnTitle'   => 'EXIF k�padatok rejt�se',

    'showRotateBtn'             => 'Forgat�s',
    'showRotateBtnTitle'        => 'K�p elforgat�sa jobbra 90 fokkal',

    'showUpdateBtn'             => 'Friss�t�s',
    'showUpdateBtnTitle'        => '�jragener�lja az �tm�retezett k�pet �s az el�n�zeti k�pet',

    'showExifFilename'          => 'F�jl n�v: ',
    'showExifFilesize'          => 'F�jl m�ret: ',
    'showExifResolution'        => 'Felbont�s: ',
    'showExifDateFormat'        => '%a, %d %B %Y %H:%M:%S',
    'showExifDate'              => 'D�tum: ',
    'showExifCamera'            => 'Kamera t�pus: ',
    'showExifISO'               => 'ISO: ',
    'showExifExposure'          => 'Exposure: ',
    'showExifAperture'          => 'Aperture: ',
    'showExifFocalLength'       => 'Focal length: ',
    'showExifFlashYes'          => 'Igen',
    'showExifFlashNo'           => 'Nem',
    'showExifFlash'             => 'Flash fired: ',
    'showExifDialogTitle'       => 'Original image details',

    'showImageTitleImage'       => 'Kattints a k�vetkez� k�p megjelenit�s�hez: #image#',
    'showImageTitleIndex'       => 'Kattint�sra vissza az album index-hez',


    // edit*.php
    'editTitle'                 => '#filename# szerkeszt�se',
    'editDlgTitle'              => 'Album defin�ci�s file',
    'editFileLocation'          => 'F�jl helye',

    'editEditAsTextBtn'         => 'Szerkeszt�s sz�vegk�nt',
    'editEditAsTextBtnTitle'    => 'Ezen f�jl szerkeszt�se plain-text f�jlk�nt',
    'editReindexNote'           => 'Az �tm�retez�s ut�n �jra kell indexelned',

    'editAlbumTitle'            => 'Album c�m:',
    'editAlbumDate'             => 'D�tum:',
    'editAlbumComment'          => 'Le�r�s:',
    'editAlbumTitleImage'       => 'Title image:',
    'editAlbumDefault'          => 'Alap�rtelmezett album',
    'editAlbumUsers'            => 'Enged�lyezett felhaszn�l�k:',
    'editAlbumUsersNote'        => '(vessz�vel elv�lasztott felhaszn�l�i lista, �res �rt�k vagy <B>all</B> = anonymous el�r�s, <B>valid-user</B> = minden regisztr�lt felhaszn�l�)',

    'editCancelBtn'             => 'M�gsem',
    'editSaveBtn'               => 'Ment�s',

    'editThumbLink'             => '#filename# (megnyit�s �j ablakban)',
    'editImgFilename'           => 'F�jln�v<BR><small>(v�ltoztatsd meg az �tnevez�shez, vagy hagyd �resen a t�rl�shez)</small>:',
    'editImgTitle'              => 'C�m:',
    'editImgComment'            => 'Le�r�s:',
    'editImgResize'             => 'K�p �tm�retez�se',
    'editNewFileMessage'        => '( �j f�jl )',
    'editTop'                   => 'Vissza az oldal tetej�re',

    'editRenameError'           => '#filename# f�jl nem nevezhet� �t - �rv�nytelen kiterjeszt�s',
    'editSaveError'             => 'Hiba l�pett fel az album defin�ci�s f�jl�nak ment�se k�zben: #filename#',
    'editHTML'                  => 'HTML',
    'editText'                  => 'Sz�veg',

    // reindex.php
    'reindexTitle'              => 'DAlbum �jra indexel�s',
    'reindexDlgTitle'           => 'DAlbum �jra indexel�s',
    'reindexDlgComment'         => 'DAlbum �jra indexel�s �j k�peket keres a mapp�kban, elk�sziti a hi�nyz� el�n�zeti k�peket �s frissiti az adatb�zist.',
    'reindexDlgSpeed'           => 'V�laszd ki az �jra indexel�s sebess�g�t:',

    'reindexSpeed0'             => '<B>Gyors</B>: Csak m�g nem l�tez� el�n�zeti- �s �tm�retezett k�peket hoz l�tre. Nem ellen�rzi a k�pf�jlok integrit�s�t.',
    'reindexSpeed1'             => '<B>Moder�lt</B>: Csak m�g nem l�tez�, vagy hib�s el�n�zeti- �s �tm�retezett k�peket hoz l�tre. Ellen�rzi a k�pf�jlok integrit�s�t.',
    'reindexSpeed2'             => '<B>Lass�</B>: Olyan, mint a <B>Moder�lt</B>, de t�rli is a referencia n�lk�li el�n�zeti- �s �tm�retezett k�peket.',
    'reindexSpeed3'             => '<B>Nagyon lass�</B>: �jra l�trehozza az �sszes el�n�zeti- �s �tm�retezett k�pet. Vigy�zat: �r�kig tarthat!',

    'reindexCancelBtn'          => 'M�gsem',
    'reindexStartBtn'           => 'Ind�t�s',

    'reindexProgressTitle'      => 'DAlbum �jra indexel�s folyamatban',

    'reindexError'              => 'Hiba l�pett fel az el�n�zeti k�p l�trehoz�s�n�l',
    'reindexRetry'              => '�jra pr�b�lkoz�s',
    'reindexIgnore'             => 'Kihagy �s folytat',
    'reindexAgain'              => '�jra indexel�s �jrakezd�se',

    'reindexMainImageProblem'   => 'Felt�lt�tt k�p probl�ma',
    'reindexResizedProblem'     => '�tm�retezett k�p probl�ma',
    'reindexThumbProblem'       => 'El�n�zeti k�p probl�ma',

    'reindexCompleted'          => '<P>M�velet v�grehajtva.</P><P>Az �jra indexel�s #elapsed# m�sodpercet vett ig�nybe. Album rendszer l�trehozva #treeelapsed# m�sodperc alatt.</P>',
    'reindexStats'              => 'DAlbum statisztika',
    'reindexStatsAlbums'        => 'Albumok sz�ma:',
    'reindexStatsImages'        => 'K�pek sz�ma:',
    'reindexStatsOrigSize'      => 'Az eredeti k�pek teljes m�rete:',
    'reindexStatsResizedSize'   => 'Az �tm�retezett k�pek teljes m�rete:',
    'reindexStatsThumbSize'     => 'Az el�n�zeti k�pek teljes m�rete:',

    'reindexStatusErrors'       => '<B>�llapot: </B> #errors# hiba tal�lhat�:',

    'reindexStatusOK'           => '<B>�llapot: </B> K�sz. Hiba nem tal�lhat�.',
    'reindexSaveError'          => '<B>Hiba: </B>#filename# f�jlt nem lehet menteni',

    'reindexTHFilename'         => 'Fi�ln�v',
    'reindexTHProblem'          => 'Probl�ma',

    // customizations

    // Image comments
    'cCommentsImageComments'        => 'K�p le�r�s',
    'cCommentsLoginToAddComments'   => 'Hozz�sz�l�shozz�ad�s�hoz l�pj be: #loginbutton#<BR>&nbsp;',
    'cCommentsYourName'             => 'Neved:',
    'cCommentsComment'              => 'Le�r�s:',
    'cCommentsSendButtonText'       => 'K�ld',
    'cCommentsDeleteButtonText'     => 'T�rl�s',
    'cCommentsMailSubject'          => '�j hozz�sz�l�s #image# k�phez ( Album: #album# )',
    'cCommentsMailBody'             => "�j hozz�sz�l�st k�ldte: #user#, IP: #ip#, DNS: #dns#\n\n#body#\n\nPage URL: #url#\n",
    'cCommentsDateFormat'           => 'F j, Y, g:i a',

    // Slide show
    'cSlideshowSlideshow'           => '-- Slide show --',
    'cSlideshowSeconds'             => '#sec# m�sodperc',

    // Exif line (must be short)
    'cExiflineISOSpeedRatings'      => 'ISO:',
    'cExiflineExposure'             => 'E:',
    'cExiflineAperture'             => 'A:',
    'cExiflineFlash'                => 'Flash:',
    'cExiflineDateFormat'           => '%d %B %Y %H:%M:%S',

    // Custom file types
    'cCustomClickToOpen'            => 'Kattint a megnyit�shoz: "#title#"',
    'cCustomOpenBtn'                => 'F�jl megnyit�s',
    'cCustomOpenBtnTitle'           => '"#title#" megnyit�sa ebben az ablakban',

    // Highligh modified albums
    'cModifiedNew'                  => '�j!',
    'cModifiedUpdated'              => 'friss�tve!',

    ''  => ''
);

?>