<?php

/*
    Russian language support for DAlbum.
    Recommended charset: windows-1251

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
    'loginBtn'          => '����',
    'loginBtnTitle'     => '������ ��� ������������ � ������',

    'logoutBtn'         => '�����',
    'logoutBtnTitle'    => '������� � ����� ��������������������� ������������',

    'reindexBtn'        => '��������������',
    'reindexBtnTitle'   => '����� ����� ����������� � ���������� ���� ������',

    'usrmgrBtn'         => '������������',
    'usrmgrBtnTitle'    => '���������� ������� ������������� � ��������� �������',

    'closeWindowBtn'    => '�������',
    'closeWindowBtnTitle'=> '������� ����',

    'fullScreenBtn'         => '����������',
    'fullScreenBtnTitle'    => '������� ���� �� ���� �����. ��� ������ ������� ������� F11',

    'editDefBtn'            => '��������',
    'editDefBtnTitle'       => '�������� �������� �������, ����������� � ������ ��������',

    'indexUsername'         => '������������:',
    'page'                  => '����������� #begin# - #end# �� #count#. &nbsp; ��������: &nbsp;',
    'noimages'              => '��� �����������',
    'noPublicImages'        => '��� ��������� ������� ������� ���� ������.',
    'noscript'              => '��������, ��� ������ ���������� ������� ��������� ��������� Javascript � ����� ��������.<BR>���������� �������� ��������� Javascript ��� ����� ����� � ���������� ������ �������� � �������� ��� ��������.',

    'prevPageBtn'           => '����.',
    'prevPageBtnTitle'      => '���������� �������� (#page#)',

    'nextPageBtn'           => '����.',
    'nextPageBtnTitle'      => '��������� �������� (#page#)',


    'statusLeft'            => '<b>#TotalImages#</b> ����������� � <b>#TotalAlbums#</b> ��������',

    // Common stuff
    'mainPage'              => '������� �� ������� ��������',
    'username'              => '��� ������������:',
    'password'              => '������:',
    'bytes'                 => '����',
    'KB'                    => '��',
    'MB'                    => '��',
    'pixels'                => '����.',
    'errorReturn'           => '��������� �� ���������� ��������',

    /// Login.php
    'loginTitle'            =>  '������� ���� ��� � ������ ��� ����� � �������',
    'loginAuthError'        =>  '������',
    'loginBadUserName'      =>  '��� ������������ ��� ������ �� �������.',
    'loginAgain'            =>  '����� ��� ���',
    'loginNoCookiesWarning' =>  '<HR><B>��������: � ����� �������� ��������� ��������� Cookies!</B><BR><BR>���������� �������� ��������� Cookies ��� ����� ����� � ���������� ������ �������� � �������� ��� ��������.<BR><HR>',
    'loginLoginBtn'         => '����',
    'loginCancelBtn'        => '������',

    // pass.php
    'passTitle'             => '������������',
    'passUserExists'        => '������������ #user# ��� ����������.',
    'passNotMatch'          => '������ �� ���������.',
    'passNoUserSelected'    => '�������� ��� ������������ �� ������ ����� ����������� �������.',
    'passNoAdminDelete'     => '������� ������������� �� ����� ���� ������.',
    'passWriteError'        => '������ ������ ����� �������!',
    'passError'             => '<B>������: </B>#error#',
    'passAddBtn'            => '��������',
    'passDeleteBtn'         => '�������',
    'passChangePwdBtn'      => '�������� ������',
    'passCloseBtn'          => '�������',
    'passCancelBtn'         => '������',

    'passAddUserDlgTitle'   => '����� ������������',
    'passChangePwdDlgTitle' => '����� ������',
    'passConfirmPassword'   => '����������� ������:',

    // showimg.php
    'showPrevBtn'           => '����������',
    'showPrevBtnTitle'      => '�������� ���������� �����������',

    'showNextBtn'           => '���������',
    'showNextBtnTitle'      => '�������� ��������� �����������',

    'showIndexBtn'          => '����������',
    'showIndexBtnTitle'     => '��������� � ���������� �������',

    'showImageBtn'          => '�����������',
    'showImageBtnTitle'     => '�������� ������ ����������� ��� ����� � ��������� ���������� � ����� ����',

    'showHiResBtn'          => '�������� (#size#)',
    'showHiResBtnTitle'     => '�������� �������������� ���������� � ����� ����',

    'showShowDetailsBtn'        => '���������',
    'showShowDetailsBtnTitle'   => '�������� ��������� ������: ����, ��������, ��������� (���� ��������)',

    'showHideDetailsBtn'        => '������ ���������',
    'showHideDetailsBtnTitle'   => '������ ��������� ������',

    'showRotateBtn'             => '���������',
    'showRotateBtnTitle'        => '��������� ����������� �� 90 �������� �� ������� �������',

    'showUpdateBtn'             => '��������',
    'showUpdateBtnTitle'        => '���������� ����������� ����������� � ���������',


    'showExifFilename'          => '��� �����: ',
    'showExifFilesize'          => '������ �����: ',
    'showExifResolution'        => '����������: ',
    'showExifDateFormat'        => '%a, %d %B %Y %H:%M:%S',
    'showExifDate'              => '����: ',
    'showExifCamera'            => '��� ����������: ',
    'showExifExposure'          => '��������: ',
    'showExifAperture'          => '���������: ',
    'showExifFocalLength'       => '�������� ����������: ',
    'showExifFlashYes'          => '�� ��������',
    'showExifFlashNo'           => '��� �������',
    'showExifFlash'             => '�������: ',
    'showExifDialogTitle'       => '��������� ������',

    'showImageTitleImage'       => '�������� ��� �������� � ���������� �����������: #image#',
    'showImageTitleIndex'       => '�������� ����� ��������� � ���������� �������',


    // edit*.php
    'editTitle'                 => '��������� #filename#',
    'editDlgTitle'              => '���� �������� �������',
    'editFileLocation'          => '��� �����',

    'editEditAsTextBtn'         => '�����',
    'editEditAsTextBtnTitle'    => '������������� ���� ���� � ��������� ����',
    'editReindexNote'           => '��������: ����� ��������� ����������� ����������� ���������� ����������������� ������!',

    'editAlbumTitle'            => '�������� �������:',
    'editAlbumDate'             => '����:',
    'editAlbumComment'          => '�����������:',
    'editAlbumTitleImage'       => '��������� �����������:',
    'editAlbumDefault'          => '������ �� ���������',
    'editAlbumUsers'            => '������������:',
    'editAlbumUsersNote'        => '(������� ����� ������������� ����� �������.<BR>������ ������ ��� <B>all</B> ������� ��������� ������, <B>valid-user</B>=������ ��� ���� ������������������ �������������)',

    'editCancelBtn'             => '������',
    'editSaveBtn'               => '���������',

    'editThumbLink'             => '#filename# (� ����� ����)',
    'editImgFilename'           => '��� �����<BR><small>(������ ������ = �������)</small>:',
    'editImgTitle'              => '��������:',
    'editImgComment'            => '�����������:',
    'editImgResize'             => '���������',
    'editNewFileMessage'        => '( ����� )',
    'editTop'                   => '������',

    'editRenameError'           => '������ �������������� ����� � #filename# - ������������ ���������� �����',
    'editSaveError'             => '������ ��� ������ ����� �������� ������� #filename#',
    'editHTML'                  => 'HTML',
    'editText'                  => '�����',

    // reindex.php
    'reindexTitle'              => '��������������',
    'reindexDlgTitle'           => '��������������',
    'reindexDlgComment'         => '��� �������������� <B>DAlbum</B> ���� ����� ����������� �� �����, ������� ������������� ��������� � ��������� ���������� �������.',
    'reindexDlgSpeed'           => '�������� �������� ��������������:',

    'reindexSpeed0'             => '<B>�������</B>. ��������� � ����������� ����� ��������� ������ ���� �����. ����� �� ����������. ���������� ������ �� �����������.',
    'reindexSpeed1'             => '<B>�������</B>. ��������� � ����������� ����� ��������� ������ ���� �����. ����� �� ���������� ��� ���������.',
    'reindexSpeed2'             => '<B>���������</B>. ���������� <B>�������</B> ��������. ����� ���� ��������� �������������� ��������� � ����������� �����.',
    'reindexSpeed3'             => '<B>����� ���������</B>. ����������� ��� ��������� � ����������� �����. ��������: ��� ������� ����� ������ ��������� �����!',

    'reindexCancelBtn'          => '������',
    'reindexStartBtn'           => '������ ��������������',

    'reindexProgressTitle'      => '���� ��������������',

    'reindexError'              => '������ ��� �������� ��������� ����������� ',
    'reindexRetry'              => '��������� ��������',
    'reindexIgnore'             => '���������� ����������� � ����������',
    'reindexAgain'              => '������ ������������� �������',

    'reindexMainImageProblem'   => '�������� � ������������ ������������',
    'reindexResizedProblem'     => '�������� � ����������� ������������',
    'reindexThumbProblem'       => '�������� � ����������',

    'reindexCompleted'          => '<P>������������� ���������.</P><P>�������� ������ #elapsed# ������. �������� ������ ���������� �������� ������ #treeelapsed# ������.</P>',
    'reindexStats'              => '����������',
    'reindexStatsAlbums'        => '���������� ��������:',
    'reindexStatsImages'        => '���������� �����������:',
    'reindexStatsOrigSize'      => '����� ������ ������������ �����������:',
    'reindexStatsResizedSize'   => '����� ������ ����������� �����������:',
    'reindexStatsThumbSize'     => '����� ������ ��������:',

    'reindexStatusErrors'       => '<B>������: </B> ������� #errors# ������:',

    'reindexStatusOK'           => '<B>������: </B> �������� ��������� �������. ������ �� ����������.',
    'reindexSaveError'          => '<B>������: </B> �� ������� �������� ���� #filename#',

    'reindexTHFilename'         => '��� �����',
    'reindexTHProblem'          => '�����������',

    // Image comments
    'cCommentsImageComments'        => '�����������',
    'cCommentsLoginToAddComments'   => '���������� ������� #loginbutton# ����� �������� ��� ����������.<BR>&nbsp;',
    'cCommentsYourName'             => '���:',
    'cCommentsComment'              => '�����������:',
    'cCommentsSendButtonText'       => '���������',
    'cCommentsDeleteButtonText'     => '�������',
    'cCommentsMailSubject'          => '����� ����������� ��� ����������� #image# ( ������: #album# )',
    'cCommentsMailBody'             => "����� ����������� �� ������������ #user#, IP: #ip#, DNS: #dns#\n\n#body#\n\n�����: #url#\n",
    'cCommentsDateFormat'           => 'F j, Y, g:i a',

    // Slide show
    'cSlideshowSlideshow'           => '-- ����� ��� --',
    'cSlideshowSeconds'             => '#sec# ������',

    // Exif line (must be short)
    'cExiflineISOSpeedRatings'      => 'ISO:',
    'cExiflineExposure'             => '���.:',
    'cExiflineAperture'             => '�����.:',
    'cExiflineFlash'                => '���.:',
    'cExiflineDateFormat'           => '%d %B %Y %H:%M:%S',

    // Custom file types
    'cCustomClickToOpen'            => '�������� ����� ������� "#title#"',
    'cCustomOpenBtn'                => '������� ����',
    'cCustomOpenBtnTitle'           => '������� "#title#" � ���� ����',

    // Highligh modified albums
    'cModifiedNew'                  => '�����!',
    'cModifiedUpdated'              => '����������!',

    ''  => ''
);

?>