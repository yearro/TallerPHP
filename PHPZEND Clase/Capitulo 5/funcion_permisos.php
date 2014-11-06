<?php
function permisos_de_archivo($a){
	$permisos = fileperms($a);
	if (($permisos & 0xC000) == 0xC000){ $info = 's';
		} elseif (($permisos & 0xA000) == 0xA000) { $info = 'l';
		} elseif (($permisos & 0x8000) == 0x8000) { $info = '-';
		} elseif (($permisos & 0x6000) == 0x6000) { $info = 'b';
		} elseif (($permisos & 0x4000) == 0x4000) { $info = 'd';
		} elseif (($permisos & 0x2000) == 0x2000) { $info = 'c';
		} elseif (($permisos & 0x1000) == 0x1000) { $info = 'p';
		} else { $info = 'u'; }
	$info .= (($permisos & 0x0100) ? 'r' : '-');
	$info .= (($permisos & 0x0080) ? 'w' : '-');
	$info .= (($permisos & 0x0040) ?
             (($permisos & 0x0800) ? 's' : 'x' ) :
             (($permisos & 0x0800) ? 'S' : '-'));
	$info .= (($permisos & 0x0020) ? 'r' : '-');
	$info .= (($permisos & 0x0010) ? 'w' : '-');
	$info .= (($permisos & 0x0008) ?
             (($permisos & 0x0400) ? 's' : 'x' ) :
             (($permisos & 0x0400) ? 'S' : '-'));
	$info .= (($permisos & 0x0004) ? 'r' : '-');
	$info .= (($permisos & 0x0002) ? 'w' : '-');
	$info .= (($permisos & 0x0001) ?
             (($permisos & 0x0200) ? 't' : 'x' ) :
             (($permisos & 0x0200) ? 'T' : '-'));
	return $info;
}
?>