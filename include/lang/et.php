<?php

/*  DAlbum English-US language support file

    (c) Copyright 2003 by DeltaX Inc.

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
    'loginBtn'          => 'Logi sisse',
    'loginBtnTitle'     => 'Logi sisse',

    'logoutBtn'         => 'Logi v�lja',
    'logoutBtnTitle'    => 'Logi v�lja',

    'reindexBtn'        => 'Reindekseeri',
    'reindexBtnTitle'   => 'Otsi uusi pilte ja t�ienda DAlbumi andmebaasi',

    'usrmgrBtn'         => 'Kasutajad',
    'usrmgrBtnTitle'    => 'Lisa/kustuta kasutajaid ja muuda salas�nu',

    'closeWindowBtn'    => 'Sulge aken',
    'closeWindowBtnTitle'=> 'Sulge see aken',

    'fullScreenBtn'         => 'T�isekraanvaade',
    'fullScreenBtnTitle'    => 'Ava leht t�isekraanvaates v�i vajuta F11 klahvi',

    'editDefBtn'            => 'Redigeeri',
    'editDefBtnTitle'       => 'Muuda albumi nime, kommentaare ja redigeeri albumi pilte',

    'indexUsername'         => 'Kasutaja:',
    'page'                  => 'N�itan #begin# - #end# kokku #count# -st. &nbsp; Leht: &nbsp;',
    'noimages'              => 'Pilte pole',
    'noPublicImages'        => 'Ei �htki avalikku pilti. Palun logi sisse.',
    'noscript'              => 'Vabandust, kaustavaadet n�idatakse ainult siis, kui brauseri Javascripti tugi on sisse l�litatud.<BR><BR>Ava brauseri eelistused ja luba Javasgript selle veebi kohta.',

    'prevPageBtn'           => 'Eelmine',
    'prevPageBtnTitle'      => 'Mine eelmisele lehele (#page#)',

    'nextPageBtn'           => 'J�rgmine',
    'nextPageBtnTitle'      => 'Mine j�rgmisele lehele (#page#)',

    'statusLeft'            => '<b>#TotalImages#</b> pilti <b>#TotalAlbums#</b> albumites',
    'statusRight'           => '<a href="http://www.dalbum.org">Genereeritud DAlbumi versiooni #version# poolt &copy; 2003 DeltaX Inc. #elapsed# sekundiga</a>',

    // Common stuff
    'mainPage'              => 'Mine pealehele',
    'username'              => 'Kasutajanimi:',
    'password'              => 'Salas�na:',
    'bytes'                 => 'baiti',
    'KB'                    => 'KB',
    'MB'                    => 'MB',
    'pixels'                => 'pikslit',
    'errorReturn'           => 'Tagasi eelmisele lehele',

    /// Login.php
    'loginTitle'            =>  'Logi sisse #title#-sse',
    'loginAuthError'        =>  'Autentimise viga',
    'loginBadUserName'      =>  'Teie kasutajanimi ja/v�i salas�na puudub andmebaasis.',
    'loginAgain'            =>  'Logi uuesti sisse',
    'loginNoCookiesWarning' =>  '<HR><B>Hoiatus: Brauseri k�psised - Cookies - ei ole lubatud!</B><BR>J�tkamiseks tuleb need lubada.<BR>Palun luba k�psised brauseri seadetes ja v�rskenda siis lehte.<BR><HR>',
    'loginLoginBtn'         => 'Logi sisse',
    'loginCancelBtn'        => 'T�hista',

    // pass.php
    'passTitle'             => 'Kasutajahaldus',
    'passUserExists'        => 'Kasutaja #user# on juba olemas.',
    'passNotMatch'          => 'Salas�nad ei kattu.',
    'passNoUserSelected'    => '�htki kasutajat pole valitud.',
    'passNoAdminDelete'     => 'Esmast DAlbumi administraatorit ei saa kustutada.',
    'passWriteError'        => 'Salas�nafaili ei �nnestu muutmiseks avada!',
    'passError'             => '<B>Viga: </B>#error#',
    'passAddBtn'            => 'Lisa',
    'passDeleteBtn'         => 'Kustuta',
    'passChangePwdBtn'      => 'Muuda salas�na',
    'passCloseBtn'          => 'Sulge',
    'passCancelBtn'         => 'T�hista',

    'passAddUserDlgTitle'   => 'Lisa kasutaja',
    'passChangePwdDlgTitle' => 'Muuda salas�na',
    'passConfirmPassword'   => 'Kinnita salas�na:',

    // showimg.php
    'showPrevBtn'           => 'Eelmine',
    'showPrevBtnTitle'      => 'N�ita eelmist pilti',

    'showNextBtn'           => 'J�rgmine',
    'showNextBtnTitle'      => 'N�ita j�rgmist pilti',

    'showIndexBtn'          => 'Sisukord',
    'showIndexBtnTitle'     => 'Tagasi albumi sisukorra juurde',

    'showImageBtn'          => 'N�ita pilti',
    'showImageBtnTitle'     => 'N�ita uues aknas ainult pilti',

    'showHiResBtn'          => 'Originaalsuurus (#size#)',
    'showHiResBtnTitle'     => 'N�ita uues aknas originaalsuuruses pilti',

    'showShowDetailsBtn'        => 'N�ita detaile',
    'showShowDetailsBtnTitle'   => 'N�ita pildi EXIF detaile: Kuup�eva, jne. (kui v�imalik)',

    'showHideDetailsBtn'        => 'Peida detailid',
    'showHideDetailsBtnTitle'   => 'Peida pildi EXIF detailid',

    'showRotateBtn'             => 'P��ra',
    'showRotateBtnTitle'        => 'P��ra pilti 90 kraadi p�rip�eva',

    'showUpdateBtn'             => 'T�ienda',
    'showUpdateBtnTitle'        => 'Regenereeri muudetud suurusega pildid ja pisipildid',

    'showExifFilename'          => 'Faili nimi: ',
    'showExifFilesize'          => 'Faili suurus: ',
    'showExifResolution'        => 'Resolutsioon: ',
    'showExifDateFormat'        => '%a, %d %B %Y %H:%M:%S',
    'showExifDate'              => 'Kuup�ev: ',
    'showExifCamera'            => 'Kaamera: ',
    'showExifISO'               => 'ISO: ',
    'showExifExposure'          => 'Exposure: ',
    'showExifAperture'          => 'Aperture: ',
    'showExifFocalLength'       => 'Focal length: ',
    'showExifFlashYes'          => 'Jah',
    'showExifFlashNo'           => 'Ei',
    'showExifFlash'             => 'V�lklamp: ',
    'showExifDialogTitle'       => 'Pildi originaaldetailid',

    'showImageTitleImage'       => 'Kl�psa j�rgmise pildi vaatamiseks: #image#',
    'showImageTitleIndex'       => 'Kl�psa albumi sisukorra juurde tagasi p��rdumiseks',


    // edit*.php
    'editTitle'                 => 'Redigeeri #filename#',
    'editDlgTitle'              => 'Albumi definitsioonifail',
    'editFileLocation'          => 'Faili asukoht',

    'editEditAsTextBtn'         => 'Muuda tekstina',
    'editEditAsTextBtnTitle'    => 'Muuda faili tekstifailina',
    'editReindexNote'           => 'Palun arvesta, et peale pildi suuruse seadete muutumist tuleb reindekseerida',

    'editAlbumTitle'            => 'Albumi nimi:',
    'editAlbumDate'             => 'Kuup�ev:',
    'editAlbumComment'          => 'Kommentaar:',
    'editAlbumTitleImage'       => 'Nimipilt:',
    'editAlbumDefault'          => 'Vaikimisi album',
    'editAlbumUsers'            => 'Lubatud kasutajad:',
    'editAlbumUsersNote'        => '(komaga eraldatud kasutajate loend, t�hi v�li v�i <B>all</B> = anon��mne ligip��s, <B>valid-user</B>=iga autenditud kasutaja)',

    'editCancelBtn'             => 'T�hista',
    'editSaveBtn'               => 'Salvesta',

    'editThumbLink'             => '#filename# (avaneb uues aknas)',
    'editImgFilename'           => 'Failinimi<BR><small>(�mbernimetamiseks muuda, kustutamiseks puhasta lahter)</small>:',
    'editImgTitle'              => 'Pealkiri:',
    'editImgComment'            => 'Kommentaar:',
    'editImgResize'             => 'Muuda pildi suurust',
    'editNewFileMessage'        => '( uus fail )',
    'editTop'                   => '�les',

    'editRenameError'           => 'Faili #filename# nime ei saa muuta - vigane faililaiend',
    'editSaveError'             => 'Albumi definitsioonifaili #filename# muutmisel tekkis viga',
    'editHTML'                  => 'HTML',
    'editText'                  => 'Tekst',

    // reindex.php
    'reindexTitle'              => 'DAlbumi reindekseerimine',
    'reindexDlgTitle'           => 'DAlbumi reindekseerimine',
    'reindexDlgComment'         => 'DAlbum reindekseerimine otsib uutele piltidele andmekaustu, loob puuduvad pisipildid ja t�iendab pildiandmebaasi.',
    'reindexDlgSpeed'           => 'M��ra allpool reindekseerimise kiirus:',

    'reindexSpeed0'             => '<B>Kiire</B>. Loob �ksnes puuduvad pisipildid ja muudetud suurusega pildid. Ei kontrolli pildifaile.',
    'reindexSpeed1'             => '<B>M��dukas</B>. Loob �ksnes puuduvad v�i  vigased pisipildid ja muudetud suurusega pildid. Kontrollib pildifaile.',
    'reindexSpeed2'             => '<B>Aeglane</B>. Sama, mis <B>M��dukas</B>, kuid �htlasi kustutab tarbetud pisipildid ja muudetud suurusega pildid.',
    'reindexSpeed3'             => '<B>�liaeglane</B>. Loob uuesti k�ik pisipildid ja muudetud suurusega pildid. Hoiatus: v�ib v�tta mitu tundi!',

    'reindexCancelBtn'          => 'T�hista',
    'reindexStartBtn'           => 'Alusta',

    'reindexProgressTitle'      => 'Toimub DAlbumi reindekseerimine',

    'reindexError'              => 'Pisipildi loomisel tekkis viga',
    'reindexRetry'              => 'Proovi uuesti',
    'reindexIgnore'             => 'Eira viga ja j�tka',
    'reindexAgain'              => 'K�ivita reindekseerimine uuesti',

    'reindexMainImageProblem'   => 'Probleem �leslaetud pildiga',
    'reindexResizedProblem'     => 'Probleem muudetud suurusega pildiga',
    'reindexThumbProblem'       => 'Probleem pisipildiga',

    'reindexCompleted'          => '<P>Operatsioon l�petatud.</P><P>Reindekseerimine kestis #elapsed# sekundit. Albumi struktuuri loomine kestis #treeelapsed# sekundit.</P>',
    'reindexStats'              => 'DAlbumi statistika',
    'reindexStatsAlbums'        => 'Albumite arv:',
    'reindexStatsImages'        => 'Piltide arv:',
    'reindexStatsOrigSize'      => 'Originaalpiltide kogusuurus:',
    'reindexStatsResizedSize'   => 'Muudetud suurusega piltide kogusuurus:',
    'reindexStatsThumbSize'     => 'Pisipiltide kogusuurus:',

    'reindexStatusErrors'       => '<B>Seisund: </B>Leiti #errors# viga:',

    'reindexStatusOK'           => '<B>Seisund: </B> Korras. Vigu ei leitud.',
    'reindexSaveError'          => '<B>Viga: </B> V�imatu salvestada #filename#',

    'reindexTHFilename'         => 'Failinimi',
    'reindexTHProblem'          => 'Probleem',

    // customizations

    // Image comments
    'cCommentsImageComments'        => 'Pildi kommentaarid',
    'cCommentsLoginToAddComments'   => 'Palun #loginbutton# kommentaaride lisamiseks.<BR>&nbsp;',
    'cCommentsYourName'             => 'Sinu nimi:',
    'cCommentsComment'              => 'Kommentaar:',
    'cCommentsSendButtonText'       => 'Saada',
    'cCommentsDeleteButtonText'     => 'Kustuta',
    'cCommentsMailSubject'          => 'Uus kommentaar  pildi #image# kohta ( Album: #album# )',
    'cCommentsMailBody'             => "Postitatud #user# poolt, IP: #ip#, DNS: #dns#\n\n#body#\n\nPage URL: #url#\n",
    'cCommentsDateFormat'           => 'F j, Y, g:i a',

    // Slide show
    'cSlideshowSlideshow'           => '-- Slaidishow --',
    'cSlideshowSeconds'             => '#sec# sekundit',

    // Exif line (must be short)
    'cExiflineISOSpeedRatings'      => 'ISO:',
    'cExiflineExposure'             => 'E:',
    'cExiflineAperture'             => 'A:',
    'cExiflineFlash'                => 'Flash:',
    'cExiflineDateFormat'           => '%d %B %Y %H:%M:%S',

    // Custom file types
    'cCustomClickToOpen'            => 'Kl�psa "#title#" avamiseks',
    'cCustomOpenBtn'                => 'Ava fail',
    'cCustomOpenBtnTitle'           => 'Ava fail "#title#" samas aknas',

    // Highligh modified albums
    'cModifiedNew'                  => 'uus!',
    'cModifiedUpdated'              => 't�iendatud!',

    ''  => ''
);

?>