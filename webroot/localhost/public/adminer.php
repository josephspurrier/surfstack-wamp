<?php
/** Adminer - Compact database management
* @link http://www.adminer.org/
* @author Jakub Vrana, http://www.vrana.cz/
* @copyright 2007 Jakub Vrana
* @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
* @version 4.0.3
*/error_reporting(6135);$Fc=!preg_match('~^(unsafe_raw)?$~',ini_get("filter.default"));if($Fc||ini_get("filter.default_flags")){foreach(array('_GET','_POST','_COOKIE','_SERVER')as$X){$wh=filter_input_array(constant("INPUT$X"),FILTER_UNSAFE_RAW);if($wh)$$X=$wh;}}if(function_exists("mb_internal_encoding"))mb_internal_encoding("8bit");if(isset($_GET["file"])){if($_SERVER["HTTP_IF_MODIFIED_SINCE"]){header("HTTP/1.1 304 Not Modified");exit;}header("Expires: ".gmdate("D, d M Y H:i:s",time()+365*24*60*60)." GMT");header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT");if($_GET["file"]=="favicon.ico"){header("Content-Type: image/x-icon");echo
lzw_decompress("\0\0\0` \0„\0\n @\0´C„è\"\0`EãQ¸àÿ‡?ÀtvM'”JdÁd\\Œb0\0Ä\"™ÀfÓˆ¤îs5›ÏçÑAXPaJ“0„¥‘8„#RŠT©‘z`ˆ#.©ÇcíXÃşÈ€?À-\0¡Im? .«M¶€\0È¯(Ì‰ıÀ/(%Œ\0");}elseif($_GET["file"]=="default.css"){header("Content-Type: text/css; charset=utf-8");echo
lzw_decompress("\n1Ì‡“ÙŒŞl7œ‡B1„4vb0˜Ífs‘¼ên2BÌÑ±Ù˜Şn:‡#(¼b.\rDc)ÈÈa7E„‘¤Âl¦Ã±”èi1Ìs˜´ç-4™‡fÓ	ÈÎi7†³é†„ŒFÃ©”vt2‚Ó!–r0Ïãã£t~½U'3M€ÉW„B¦'cÍPÂ:6T\rc£A¾zr_îWK¶\r-¼VNFS%~Ãc²Ùí&›\\^ÊrÀ›­æu‚ÅÃôÙ‹4'7k¶è¯ÂãQÔæhš'g\rFB\ryT7SS¥PĞ1=Ç¤cIèÊ:d”ºm>£S8L†Jœt.M¢Š	Ï‹`'C¡¼ÛĞ889¤È QØıŒî2#8Ğ­£’˜6mú²†ğjˆ¢h«<…Œ°«Œ9/ë˜ç:Jê)Ê‚¤\0d>!\0Z‡ˆvì»në¾ğ¼o(Úó¥ÉkÔ7½sàù>Œî†!ĞR\"*nSı\0@P\"Áè’(‹#[¶¥£@g¹oü­’znş9k¤8†nš™ª1´I*ˆô=Ín²¤ª¸è0«c(ö;¾Ã Ğè!°üë*cì÷>Î¬E7DñLJ© 1ÊJ=ÓÚŞ1L‚û?Ğs=#`Ê3\$4ì€úÈuÈ±ÌÎzGÑC YAt«?;×QÒk&ÇïYP¿uèåÇ¯}UaHV%G;ƒs¼”<A\0\\¼ÔPÑ\\Âœ&ÂªóV¦ğ\n£SUÃtíÅÇrŒêˆÆ2¤	l^íZ6˜ej…Á­³A·dó[İsÕ¶ˆJP”ªÊóˆÒŒŠ8è=»ƒ˜à6#Ë‚74*óŸ¨#eÈÀŞ!Õ7{Æ6“¿<oÍCª9v[–MôÅ-`Óõkö>lÙÚ´‹åIªƒHÚ3xú€›äw0t6¾Ã%MR%³½jhÚB˜<´\0ÉAQ<P<:šãu/¤;\\> Ë-¹„ÊˆÍÁQH\nv¡L+vÖÃ¦ì<ï\rèåvàöî¹\\* àÉçÓ´İ¢gŒnË©¸¹TĞ©2P•\r¨øß‹\"+z 8£ ¶:#€ÊèÃÎ2‹ºJ[i—‚£¨;z˜ûÑô¡rÊ3#¨Ù‰ :ãní\rã½ƒeÙpdİİ è2cˆê4²k¿Š£\rG•æE6_²ªÊØŞ‰b‹/Œ«HB%ò0ë¢>ÈÈğhoWÃnxlÖ æµƒCQ^€°ĞÔÿßñ\r„Š¾¶4lK{şZÆü:†ĞÜÃƒŸ.¦p¨§Ä‚éJóB-Å+B”´‘(ëTòŸ%®µJ›0ªlØT¶`+É-Á¾@BÚáÛ„Vá’Ä\0ÂÏC¼,ì¯0tâàŒF‡‰å?Ä Ë\na@ÉŒ>‚âZEC“ôO-æ›¤^Q€&ßÖù)I)®¤ÄÀR„]\r¡”9”7_ˆ¢\rÉF80µObù	€‘î>ºäı\nRı_ˆÑ8æ‚ØÙ«äov0¤bCA¸F!Ñt—–Äƒ%0”/‘zAYO(4«‹¡ˆ¨Ò	'Ÿ] Iéí8hHÂ05˜3ò@x&nˆ’|TÓ³³)`.“s6eY˜D¦z¸Œ®¥ƒJÑ“ô.„ñ{GEb¹Ó‹¡˜‹†2Õ×{\$**ı¾@İC-:zYHZIôà5F]¦²YúùCªOêAÂÚó`x'´.*9t'{ÿ(êšwP¶¾ Ñ=¢*‰†ú*üxwråÔ*c‚Ìc|„DŸ“ÚV—–\r†V.‡0âÆ™V¤dˆ?Ò€üê,EÍ`T¦É6Ûˆ-“Åì¾ÅÚT[Ñªz©‚.Ar±£Í€Pøºnƒc=aÔ9Fònß!ÙuáÎA©Şƒ0iPó¬”îºJ6eäT]VØ[\rXÌáaŸ–vkõ\n+EˆáÜ•*\0¶~¶Æù@g\"ÌNCI\$àÉŒƒ€êx@WÃy¼*vuD‚8÷=ë­ª-v´®4›dÃD’yI‚Ò¤­¼_hŞÀ'z’VÍ¶• Ü6€Yz:íQc³Ú²”õwŒª0ÀÅ]xrÄ!å@¶½/-¡*Ì5©«¤I.±]ĞYxuÁİé½o&Ö:Pß|CyÖ²wÖûÇÀ@L¯´Õ£GfØ†å¯)^¤Æ¢+–ÍQ5‚ºÀÆL4\$Mpo‰0i¦\rÛ»Ïk­ô4*w7•¯S'’—Zİ„nAb¨!1‡)ñoİ–9öc\0bÊïo-~2w4X,,…¶8m'™›˜ìªY•ƒFH–Á3GqQZ-l™\0ãÊwìe‹d5¥¢»ÁğéiÏ.«–™dã)\\çh~\\WÌ€æ™LÃ¡¸ÜĞmgòu«2lbš•àZçCĞ-6Èê–dœl£¨b\re×Mu§gra6ZD†­ƒUÊ™!K-œŸ0Ó9–beH”\"ê×[JË'¨¾»Z¼¡oµaº)‹XÉÆƒ&—tÒ8ºì€GZ.®ÅÚ˜Âë+³lr£ÊíÌ¯]kÙ#£Àj-§¹ëúW´ÉP,¡àè>@ä` \rc3\"\\ÒŠq2‰z›âê@Mï¾poà‘ª0p­ò¤d~OÙ™Ç¦ö…½¸]¡´aï»;IxÆùxh°aÌÍ‡ò¬0Nàâ~gâï?	€äLŒcuÍäw”£}úŠªt™æ<±…¥ÃÅ·¼qS’vÚ°@gsW}òL¸(kyÈ¹/6»CĞ8\rŒ‡°]\\£çLUöŞ^•nqiQÏn™T>A9\"ô´—kFôÕÚú.*îß¹²¹íßT†òóCµ‘r?:ÀÜ„üwMß,î\$m|‘xîm‘øÿ“¡÷©Bmu	®ğ=é[ˆÆ ynÃ'÷½h¾ûÚì@óŞCœv¥S2dSVÑ ¨(‡ñ\">H‰{¾-G˜ºmM¼b+hBb›cp€Ãh_ Á¶}qöşïÖ«¿e¶†_ÂmÁinüæà8€àÃ#çı`·öşÿÀm?õÿ«ü~ˆÿcDşoşş ÆĞª¯úıÜşoô4@ïÜéØ‚é<I\0``fˆÌŠº8	€ÉD”OªıôzÀŞşpM\0ê\rğ\0üĞş\"¤xşhğ^§ÀØğjşpp¿ptƒ0x§à¿0oPdbi<+àùïó0j•à`)SpığLàì)° ığ²1‹0ºĞ,ò¥ìù\n`ığjZÏ½ğ‡p±P^ÿPÓ0#)Íhğ‹èıçºxd0ÂĞ:++ô·É<úgß	ĞO`ÎûHûƒÙˆ\rbÒÛÑ%àÆ°ÔüQ'ñ-‘1P_°²\r¤cß+@®\rqèÑ(˜ÑGğ‰ñk1AwñwoÑ‚nşq2qd®‘\0×G\$ aÍOæ\0Û1ŒJ©Ñ'ñ³CÙ‘“‘„ŠÔ«ÆL`\$q±s±=‘JŒGHF.‚0Öö©=1÷Ïş™Àó\0Q‘ ‘„7æÿÒ§h3\nÙ 1à¯ş2fª`Â/ÌÿPq!0Ù!pªò?që\$Ğz,A°WrH§ë÷%pL\0Ï\$°×%‘?#&Òq	°Ñ&’s Úª&P­%²M(²'’ƒ'rF5ÀÆ™rM\$PÙ*R©(rğ7\0…,1^üF%ÒËì„&P_)…-0‚0\"Á¨Ä¬Öï¹ò¦“±ØH‰B–PÁñ¹#pûÌí° ªØ­Ã®+#òÕ\rppûBšÓüRS2&ò2¯Ñ-®şr±3nhÑö€Å0è§À§Jy%*°VÁò])²G\r\"­5,¾ù°õ]6Q7Ñ\$ƒ3€üPM8rÓ\$s‹3’Gàe0	<8B8©<,( ¨8²Ùàè	Ó&šJÙ;€¦Ï)¤«ÀR6pÖ­lğGË\"12ğ6Ë¾.\"æ¿bï7¡\$: Ü8bêA1Ù:Ã';?;G*\$¼,³Ànõ<`òTÓÊ/3Ï¨Ñf¬");}elseif($_GET["file"]=="functions.js"){header("Content-Type: text/javascript; charset=utf-8");echo
lzw_decompress("f:›ŒgCI¼Ü\n0›†S‘Øa9œÅS`°Çˆ“Œ&Ó(°Ên0˜†QIî(.‹Äq¨àöO)ŒÆÌ¢ã‘”á1™E#)œŠx8\nâ‚ñğ¸\\9ŠDâ¹„®d+¡ÑÎgÁ%(R,‰BqH®' ‘Gâq.›,2„õÁÙö‚AGCyœÏ#L’S±„ä\nŠL†óÖ8n:ŒæS¡G‡:\$“%æö;—Æ)ÒØ™²Qš´G¢sEèÉØÄö­)“Nn¶MN‡S‘¸@t9L¶Û|1›Íæ³LêTi3›…†C	æ’{¾ßù±é¸Êw0±@¤wÓ™œñ®çƒãíÎ«¼Îw{…ÈJ8\\C(÷É¨ÄZ¦j9´a[ÀŞ -òä;!ƒHÌ<ŠÈ`æß…(äš±	+‚á¸ªÂ2\r£K¬9ğ@å Áè`…‹¼èPPä™0L#±#jô±Ã+ ¡EÉ’Ù£pæ9aèØÂ;mø\\8CzèàŠ€^ò¨]\rÃ°ø\\7C8_Dƒp^ÂP é\0Ì± w &c4^RãN9DÓ\\Ü™Ãjü3ÃÂ@Êä\r8a;Mïl7ƒd<3´cpŞĞ“Àæ:)\\;¯C ĞÑ†ïå!6HT¥,4Oã=Ñ†!pdÇTøÌSs;Éc}&&Œ¨ˆÂÅ„Á5cYÊíp‹1`ÓI£èbKPRtªf2Xé»›F Ã-!\rŒ–icYú„WL\\PŞ®#r'b–]^2İØääCÍ1É(4—&ÉôD¥*JÒÄ<†]Ã:¸è/ÀTô:tÜ¿7áèPaH^?ƒ(ÇsÆs¦0»ĞPQƒá0³ç„÷ô?á‘*—\rØb.Å.ğû™…ƒ2ñfO|fÄ<ìk2L¢…07êä®8øÈ!´£c+6fW#~<I+!-ĞQªâ×H÷:â!\"šèÊ2	5“ø’¶M£m±1+èØİ-±fá³‡»„¶8\\£˜·½nûFÔ<¡ŞÚÚ…ŞÊìò¸èÜ\r#ê…aväİƒàö>…2’1ÁN(Èğ<¶²´ô¨XñtÀ‹†§cŠ•Û:•Úù‚¦®«®'‰ò€¡ÊWÚŒê€RE8ÒØ±›p@š…Ü èÎú5ÚÑ¨À·(8/Ñ§b3ö~\"J;é©Ò)^„=‡dŠv²JÀ¤şäÌ'\rí:ÛÃ¶È§[ íÆ˜ÅƒYvåüÜ×ä÷ŸYæà¶’CLĞ(7a„ÀÎŠ	z¤a­³±ÕÖgƒ2\\\rªô“ÂäBÛ%Q œ.ÂHA¡I	\r±-%ß|/„ğÆ…ØjEÃL;¥´·=–¦Üo /L½h”…CÙâ :ĞØeb‰éœÑ³TZZ‰eA£U¤NA@/ö {np•P^ÊÁe+¥p®\"¶\n‡ƒƒ“@èø˜¶|š“iåí%½Óı\r<~oÔ™Èdrd™’{å¡éd&°4§PÒ\$‚ÄŒ7u4šÁ[`…şT¦yjßƒK…cÒÕè‡–“C˜uHvP,¹<äØÒÇ\$\$Œ20ãƒâê'fLÍ©(L_üB}„€@3\0cĞ%„LQŸ˜€æå¤”Àñ²†×++%ph–ÉMÂfôŒê:—ú{˜s>‚Ü¹%jLØ3ƒ ;Ô|ÎêfœEuÅÉÚ–³\0fõ\$r\rHS%Ñ¤™2l™*4µôéó®“Îò?<gšê%£˜+æY:)Q‰=rôém3ä©ëÑ”Fj\r’Ó”:R*HG)0r”)rQ°PÔCP<7ºVÊğÕ,I-€I…°Õƒ1şRm04´à]ZQt­:ˆÑ'ø¦¸U T0½Mã!ÍK‘! È³½AàÛxfÁ°ñP¢C£Ø¢dkÑvÎìçì³TŞ‚§TY;g:\r³’ÁÔÙÑU'Rƒ”ö‚UÒù^k_UóÚŸ):>Átı…ÔYÈ:íğd–1ü‚şŞÕ'!Ñ\0®ÄhE¡¸kB×Fg]2UøoV’)¸µÊænåŞBucÄ•Câ2ö|6ÙìRéŒcT¾JÚNŸHs{îÎÕ)ıl‹Íú%b“‡ÀÂ%¨|uNÕÇÜ\0IÔ£I&Î Şø-¸WÜ¹´ºğl;Ñ\rƒÛcCëğ3ĞGÉBÛŠ«}j®M42cã\\èKÄ—H“ë‚A\rˆ ¦`Ïlw¡ıÑˆaö±M¬DİX)Æt\"tDbå‡Æ¹¸‚Èà‚g¬Î¬zç3ÀæiC0t	a”<«ĞPr•–g8ĞG='Ÿ³{‚ŒëBş±8Öàƒ£pn£ô´˜õ6Hàé~ßd§-ÁI‰4õ©+ÊÑe±YÅ4C¥RÒuË{[Wg•°–R“EƒÙoCÓ±yÑvågœÀL©–•³OĞ:n>M€2Õ™K½[­œÌµ4Iˆe=®h\"‹\$¡‰†¼7´emH7&í™³2(xƒŞ¡oêjeb¢¤V‹\n+WëÛ`æ•‘-\n¾ëºÇ·eí¤ÓÖ“¬^ñì’F’@™¡ä> M	†ŒàÄÃ€;R¦Æ^Áˆgá@÷|ÄJìö”q§\n\nØ4®Xfƒ‚¶N·Ø¼c˜»(uaMÈ¨­vùHs¸aöâó›ÔŞá‹Ë@ 4PÌ:	Ì­y°,r4GI*÷©¾ŠC0+aİ'	ƒÆ	ºJê*ì2‚ÔTZ‹bó^¡¸upÍÇ:4Dš¤Ã‡PˆŸK›Á†÷Ëá!¯›¬—x	ğ±ø€a6L¶ƒ4R	`:¿ü„R\nêd4ï‹§ñşDÆy°È¦»05‡*…g%´D’8w4aÙcóU­Ü·3#ıÙÉòrN³T°oõşÄÑ†&£ùùrn×+´\n+IàF·d`ÑâŒ^&ÜÇv(İàŒqZsLûëêcY®Ì§GàÆ¿[ñÄ4X“}‘Z¼è~®‹M>‰j—y\0z¤	ÌÒàÎ“€Nn\n¦JªÔ‹T†à«Š`ÕBKª„Ï\$ KhŒÂp'@^`Â ô ¸hà`^+\0HÀb-*‡Çm#Nê­X“ïú»Oş©ŠœÓ\n ÓI?\0ğE­JÑpµëbÕğ,FŒŸ„ñ\0Â7°?0G¢³J„rãê-d×z4a‚ÜşÏ@ôPÊ’†i%dÇ\0Pş\$®æà»¢üa,Ö%f\\ÇØïL]¨8(’4ãD fs.–Ğûãê bV ÃÅe6îo¸¯p²oöjÀéDˆ\r4a.NlOOWé\"®\nÖÆ†ÉÏÃù.>jd 0ÀÜ	¨”<Gf,íp³O\rËCëK0Ó1wËRMp{‘xÔğ¥^ñb\r¤Ä¶§§kq	»1‘°À% Oã`+Ñ¬§2-j\"îq.k±:\r\0P³+ØF#à°*>©‹\n(OÊŠ@[ñ6-ƒ2¨ÂRXZ\0í­å\0*GBtòŠWrmR¶1ş\r ì0R\$Ÿmb}GÁ mêÚ‚±\0Ïn°nbu#QLÆr:#D³-¨ ÂÚÆf—cE!±”SBK\$ÌdÇM\$ƒª&C¿\"R7%ª¯oÚg2€Î²:­äd\"PŞ{KÊ7¯Gğğ\"Q*ë…Ú#‡k¯È%ÚĞêù\"½äö¾R¤y£j?eÚÁ‰\r+2H`Ç\0\0é,@ÂÀÈ0ëï‡\$qâ£2ÊLòÈ¾'¦ïMc-ƒÀÔæ@Ğ\nƒøÁ’\\¬3©1S1ÇV{ Â-¯r ğ/*‘’‘`ù³G…{#%02>»Ì1ó4Á\r6¿ó1\"D6ˆ†cÒú.€İ2S	)Hw7â‡ÌvÉm¾âÓs8‹F˜)†ä¬—9¨B0²˜pÒĞ6ÌNÛ‹ŠĞí¹ÒíÌ•DY7.úÑó4\rbÀ3<R¢]\0S-ÌÌÍÔÍ9¬#0\n˜IˆóZğ“_0‚°–¬:‰Ç<ÀNâDñ@ÖR¤\n€Ò#ˆ”zq%8I\r9Ç«0ƒFâ`Y‘*®æÎä¥/+µàÀDÍ‘4@hä13S f)óİ4CSğnÎjÓôSÓH´Z,c¬unh\$E5`Nåïi´’æÆÿC9±H&t®oô~•©tƒìİ5Í\"“âƒ:%ÀÙKT•K‰ı?í TÄÍÌ`a2:à†üä ÊädäÔ¬ÑÎ*!NÚƒ4æ’”ê’”ñDB\r@)\rOËşœS¬Ék‹;s8]eÚÌä>¬ÚÀC<4HôL¹í4<@ä˜§Ş]\0¦.‚ƒ0Õ\"fó¹;#nÛrèîoÄ•¢tn	¼ÙFôšæş»ÍhH0™	À¼îp©¢¹K§FkUl¦IxKƒ\n‰}-ömMü·õš]àÏZ	~—“ó­{YÀÎ	 Â&Õ\r\\Ödõ\\‹\\LÆÖbj\r¯„ ‚qåß/²])àSP®×³ò4lâs–E¥_ZõŸZ-x™û`•³Z2.ÖuÁ\\UÔÕ\0|DÖ15Ó\\©ã\\õ¿[!c	^feH\r€à!Ål=Ré ëdo¯V¸cÅ4Xòv7L'eç*ÕærìhgO@£Jr¯Ùeƒ½f†È–o^§' ğ´E…T>{OËVcş¯¤›ÏàØ:Ïèôöü¬¿Ïô–àzÿÒ©°\0”¥+Q!qŒÔÕó!ééÈ}T6-¶´vV¸ÒBÂhËÑ\rF–ÆÚ»JRşÖ~û4*srè Õ\\`P6‚*^…Pš\rc–;f8³Bj#tRf»%hŠ€èys\n~ã¬;<	—At@Ët‹l tV<X\0‚7Ä\0@Ôk·Lwwj —ow7v b„	¨‚I æóu.\n€ +€u;iüÖ7/s&½zª~ob>q&6,` 	à¦\n”˜à‹|B¯qˆ<6m—[zÖ‡tw¬OÄ6!‚„‰#F€[[E¬ğæ†îÖàğ¤ªàZšà[q‚>8#N‚Øç—Û{(¥~\n~Dæ(@°¸\$Y\0È¯7_B±y‡u—\\˜³±„hjFòîRcÒa/ÆûK'e¥_{&&’].õN=4XBÈer…†GXfxK}ÃÄVWÕr†d¸¸}p÷ºŠhªŠ÷Ğk‹qq†jûx|¦X|T#¶æI¼cb\\nB„xX¶?îS€Ë3*–ÑY¤Z ÷Öû¸œİPûrgjpú¢=)¦§Š€ğÈDúD…ÀnÉ/‡'8¿r€zg\n½„\0šëH“OÖÔµk&¶ÜİÔÍ\"ÌÈÖâ8}NZ,.\0cÀ_X+î€^\r1¤z“òñ‘Bt÷Ø6rÓRLÆUàC•d\" Œ,\0øEå \ràù:	ˆŠÒ\$g•ùbÂ\rŒ|ÎÌç4íõ8Ó‚f6Is+ø ª\n@’‰ ÛŒähz‰ú*))œ9Æ\rùÊZ£À4Û610+‡H»Õ’|ÌDYk\$—¦Û¸Á›`Ô\rä<(@MCİ(®ùì‡’’\0¸Ã4 E¡ã@|ees‘*\0xò£oõqŒLœpš\\­c—®r™œŸ)+@Ğ~«ÿ¤×†ˆÏ@¸à\\P¨+‚ ,drƒ¿‘ĞÅŠx—qsİŠø_‹8é¡…¿£º ˜ÊW8Î<XÕ}792ÌÎ\$³ÌîÚPTÀèç‰}J;	2ç¡Ú¤\\G;lq\0™¾+”:šxğc’è‰”’<égi1àXâü\rÍ¤³SÍGrÍ>WFÓŞF”Ç5Úı(,q@m6s2Á»#@rğìÌF=°ƒk°ø¦\$uFV\nÚL /õÀCÂ©jã\0äã@˜¡S©s(Õ)ñµ¢@ÉğfrqÜgdjFâ.H%1âÆÁs5I–Ï[É Ğûø\\“@ËĞôé`{«n—RtƒE`z@o”•+>ë¼†3,Ø}G¾Ñ`„n`å\r Ø-d“öƒ¶ Üàîá{|!(ˆdXç8Âc\$_V€ó#ÀFn['\$òtÇ3²l~Â1'¿D?[ 1/€&e0ôå7\\E4O7²h€FLõ\0b€XQ*\0àÃ1ö¨»D\0<\$šq(Ò„Ä\nştbÚcµİÇÃÇ½nCF€ê\0`\$OÃ1|ÒÒ0vyg;m§o'ÄcÍáÃËÅ/÷-…¼Ç&ºIDm%Â\nRŠpÏÆO5â\n€Şäd=0¥ÛÅ#=ÏeF€²ÿ\\1`el<æ–SÃ¸;İ\n eÎ„ÎÒåH\$2ıÒ(¤¥eÏæı8(VDQÑã½À2§ÇW“‚Û²{e¶–ç²vöiPØØ€vŠVR\nsøä ‘¬E\0¨.—“ªæSzUì4@e–çüIÊí®Œ*yØ4ùİœ™Í}\\/yÔ\\x±å'‹]ÁÃÇj6`æWºªâ<m½í{n]ÓªıØu|;W£ëÛhˆØ­gnPµŞ¬ñß	xn†õF€ÅmŞ¾ İCàÉÏÌZÒÌÜË›/ßÍÌ‘1Í›Œ¼áhåV\$½B(XXEçª@X©yY8nsÑÜæn—ï”»À˜\rä7‚jQIˆ„C{<®J\$cìİ_¿¼/îİè®Üoèî7çå •­bíÂJñÕß^6Šr6(NÜy™p6İ˜íÚ™ºÚ<³Ã¸cãÍ¤p©ŠM<\"Ø“ÃèÛöã;ûl=Ç†Õ9Í6Ç­ªOoF‘Ö–ıîGê7ÓğÒî r:B™8xä¾®şïC\r²AÙ¯N(ÜénİÇ°›§K…•ŞÊäÎªXì€WÇG9éŞé¿6 €è\$}ói¦¦éuN\rõSDìÉRµP\nšè.×T²ß÷ÿ‚Wn×9N*\$ÜöñBr\r€„˜BÂÛFèÜ±-×\0á×S¢Š}}¬ÆLÂJÔ`=İÇ&@b†áı³2]ı8³VÀô®¤6Ê¤°û°~”°m•ÖS::å×oÜ3XÅ6’O·ÜEI·QÌı‡í×°uüzlC/\0½™%0@ƒÌ¢ûŒLŸ\nÜX3ÕÅ„.ˆĞ+Ã˜Š	jÈ\$ëx[Úg™-B°›·“Õ¾!´&š9 ^”³î\rÚ\0f&]˜°|`…@E:K4_LÆ¼@à†8%C[€V\rû‚PĞÛp==Ì›å‚Á:‚²‚0Í€ë˜Ig°M€ÕÂÁ:\nĞGƒ;	¬Ws’°X‚RaLD`ğÏ5}1©´¹TÌÕÈA¿¹3h2#ú¡ÉF¹?İËi·d»şĞ‚ƒGV AşF­BJÃUø­`@\r?Êšx¨‚f¤VáÙIi%©Ç‘Í8±¥!¿bÊÀÈÚb™Û;…Å”p]‹¢É@D,Â\rSÅBÜ!ƒ5U`Ì“—Ç¡4\r4˜	Â¸c*Ğ¸}±5 €eÕ¨Dª>öÏWÃ%µİ.‡òZÁ%N^ÇC†dşpîNğw !\08	¢\0Ğ~vJvÂ°6\0É.‰áy¨†ÉF2–l¶…vh6„W“‡Œ|æÀk\0YÌ%<\rÀkóÃ!G!5…]q†ıü+iûù .09â,zî€{™&Z'˜\0TM@ÔÇ£6tÂh+FàÄú(\0y*Pc¦=Å%wQK!ò¯ÚtÒ Âpàmp@Ø…H¬ŒçFĞ˜‚–4D¿¾	ÑZxâ´&ÄE‚- /‹<B	§¡YD11‚ÆˆØsâ``º¶\"Bˆ¤Mâ÷Bsö&¥€£YÌ;\$n’PE\nO(®Ê8óx£Åğ’H;s5	Tb’œx‰€*Šh€Â°\")úkÀÎ¤~#\\å¹‰„g’]â}¯¤åèköağıØš,ê!5+«Ì‹(B#ïŸI„'af_ÄÿÄc2Qm±¥z®Ô“uŠJ®°á`{”ü@%@wìÙLS’°È'Wêú‰”å¦=IƒÜŒy\0äÀÁ™Ğaê	 æãŒ\0¡#‰ğ\rÀDyŞ\0É X_§”¨ëuHÌ‚\0ä`CIuÈ‘ )[£D\"6Nš\0P „Ê¶Pğ¬´5â(€ÔWJXÖÚ@é(‰¦ğ1'´\rI\0P\0Äü˜\"Ô«†G4‘hs 2D©{2ì¤djà9ÈÉ=Nb‘¸MTs -™è&@]\r¿°/ó€HÚGOô”‚9%F¿V?òFYZÔMî*ù#%BêLš‚Tµ€ˆHPi,<œ”y4§¸W²Z’qÌdºÊ 2Å	Zfı’ÁêÖå'ÉÉBKÒü“e'÷{IRJÊÕ(LÇ´7äŸ†L§ä!7ƒ†0åÂ·ÑŒÓ–\nvçÇ>äªœ&ŒƒD,œW¬«\0¢L\"’&-ÁŞÅÿNê¬g@5´œ„ä«P‰ÉVb±»òXE£„‹–P’	œI«)12«\$há\0Hò%ˆ@@Za2‘0—xo'ü5§E.5dXã]?ĞË\0zËáò0&c€\0º11ŠŒ\\oDı5ˆË%<	t\ruŸqË!@Ë\\Ğ¨>è¤,?ĞÜ¥–¹ƒ¼*r˜ZÜGNk(1Å(//2,Îc7€¼	€IX@ø \"¯\0P•À\nt¦9—L\0004s#™,(ÆäP0¿+ÌŒŠ	Hû\n°Û'xÅçX€Ø9‘¹–SìºeØâeÜËél@!o—´¾\0ğ1iuŒÏe2eğ@ìp>=Ãb L@¸òZDJ€Ã‚ íñ]3ró1ÃÌÖX‰@¿ók–¤Ğ¡ù‡\$Š]Jº˜ŒÂ#\"ÉŠ¯¦i%ÀDÇ€¶%^‰B(sd\rHZÀu1DEÇBˆ•˜„äÉ–Ëì×2Ñ¦4»0şLuIšT°Yt’Ô—ÎhUó|„JÙ0ùŒˆx³s\\é'M;©Ôfwˆ¼/üÒå¬mÒâ‡\rÈäC7CÂ„(éàˆ¢eÀk\"ø	ÀBGÖÕ„ 5Ãx8J]¢\$‘,Ê¨–\r;äHUÌ\$ª¡<0¦>°Ñ„*\0_\nX¦Úğû\0®~À|˜tş@Å3€9LéƒÑx_ĞˆªRs8xn\0P\"¦?È/@f(Åè4‘­Í\0•Š±@À…@0¨æQÚ´U¨ıDŞ3Áù]í@ÁI  5?±mÚĞŸé_¤×”Èeh\\Mxæ…<à[OÌÂÏôû£F'äoc}–¼2Bô™L:…Îı•U#H€´dŞšxÃÆ\"\n/ö_31*l¬Z\0Ò¹\0^‚²¢xBÓZ*+HdB½Ÿí§DàğLYÇ”˜\nè>€®\nôÏ£G¬ÁÌ2¶ÎÁ&•~œáe¯<0ÌL‘)KYRqö…†-H›éÉI‘KQğW4V,…şUqA•d¥®¬*ù,ŠN™@°ø¬æ±Ÿê7§îo£ò|²ÅŸ<úH®7*PuÊc¥Ù1>€:Ïª˜Ş¦	ÌuG€ôÍ\0ÃtĞ @wH£S>à+\n´\\Ô8ÁÁ ¼ØÔ\rİ—²iK>ÜZ&>`œp3`f©K¢àvÆ.ğ Œ4ùu>€5i¬3bWr4A„Á€a0ÓØe´“ø¶\nÔ&?`[¤›'aPçn\024Z¬ƒ)âÈ¸c—ôÓƒ¸.Ó¡áØSú!ºF‘£rYvåJÿig#»Õ# \$eHË6TáB–„ª9oÒº¦È„hêˆ«à›8ù`0h@]0„Â¨¡UC(G™H×•\nªÈ/uleªZÿT‚Tíƒ“{Mª[Sš—Õ… ÄAê×Í[0n ô¦–â1ª*ÔfFâ¨éú>0]\0¾!ç6†BmÂˆ\\(Ì âªq¯«‰oY©-SŠÕv±•{ªÁn/T—Ğ”Î®UMªxÄj¢¾’5neÊØô¦ÂÏ\0ÈRê\n)é>*p’&J²e[“˜Qš‚¢@ğWƒ­kc[Zô%FÊ°Õ5üÓ*PrÊmº§&}:ÅŠÕê çè®9›¤fÉj.‡şR»İD¬	p'U8j¢\r”‰•-}0,X­rXZ¸Z×<&UÑu²%›ºìL»Nõ‡@Ìª0u ˆœpÓà\"ÙpåzıZW8•¡<W€‚)ßQô¿)ƒ?,²è{aà'9‘V¡}\0¶äÔ\"jH%3ÙúO¤ùCÑ>^…~?+©Í_ºyTˆs®&IÄ‘jXR6à‹¤¿¥¹Ø%DD­_ÕtYfY§Óx¶• uè•Ceu€´Ô:m¼à’HA%ƒUÒ:¢¦ó%	ÚR ²z‰V^AÁ¬Bïd•Ñkm¢1—‡ö_…ø€bmtz¦ğO‹¬Vvq•œìêø†W2ÄÁdşÉLÏvÖc†2Îñ­³ÈÒOgCÚ\$]6­s‰ı(aÓ­Ìâ•îxòŞÛê@&ïZ5?A\0íYË\n9EÙ¤#PÙõÀç[ºÕÒar³µ!OÂ6—Æ¶‡‡ê²ÀÒl4OkVVğ!TF–:£Y§\\YãÙvÀ¢”.[6Èr\nA/äˆƒPÆ^Ùñ³\0tM8ƒ\ri+E–ÚĞfÅ ıš#²[VAáÉ=´`ß!ÛjFÚÁ°¶Åœ\niağ7”AÏ,Êyı·L ‘Ö¨tz1¥+ifïZ¦Üö¬0ÖSG‘ÛH‚6ò\r5µÌ;Z°ªÔöägA­m˜»†Ï”1’¸»í¦+ŠOnŞŒ½ ı ®²\0Š,ŒHè¶ ˆAëâJÕ¢º&]¸”Í\"½Pÿ^Ûa	šÛefmYĞ\$v¸1m¬¬5¡ø©ñ\r\nN“ò”EÙCZ].—7=Î``ìK¶ ™´.R¹¬m!mëDJÜ(ÓgÔº›'uE(W¦ë	)/ùgéÖö¦µ%É­¶‡m	jh\0ª)Ùß´%–8Ã™W=Ğ¨]4zsIüÍì˜€‡ôÌŞ†îÉ¤ÙG’Gp\0‰È\0\"•fœ»ÌDšó“—K~PÒøD„Nk±=L-+\0œQÖ:Å:ÏX)k×ØÜ4b9±íï	_ØnÜÚÁW]W\\ĞBRoXVğ•İp(¢ÚûÂQRğV™#H¨‡b\0007NñSëMãB«Ñ\0®fô|rZyÖœŞZô!k¼åå[w~°¬^pw¢½a[¯\\-İj÷¢¼%ıìl-;ÙTâhæFğÚgOà‘8nhĞ*4eÛ‰V\0È’((T%`)ú Z×´­’¦(;S–ŠY!Š¼Êç¶ÔùR°2×3Lµø+“ÌIq[•—ˆ–ºã¯CO¸:¥0À\r²qX\$ñQ<U.BB8¢pz“| =ÿ@'&¾\nÒk§\"±ê’À.Ï ªÀªø#Ûóìƒ~+ÁıÀx]T@‡bı0H N_ &F¾Ğİ¶Êå‘•É®&Z\"ËÈ!dˆp`\"Œ=a—÷á—é¾ºp­éØv‚›ß°2ÖÜ@‹”¯\n¾îT\"€âD7øƒ	 ÖCs%’™-Øš5t%7ú’Åjõ(‡uG”ÂµëŠÒù©IÅ™[«j)W)ºB7§CZßªTzs×,¼k†ù	…JêvØ>ì4.Æ\r~ÏŞ]¥«CÌ4ïß @øî¦#ı 6«õ:«Zjfÿ¨Ğ 0ÿ–a>ê&+,#ØvóÍ:—¸V\0b‚v…cš«EŞE]UÅÚc_n³ÅíêjUùàŠç'ÏÆZà’ˆ«La*\$\$¨”Æ~*±¤¬|Ÿ©k³Ø–N9±·‚xÎTóø–î8ğCÌyVÂ`!Ç=R/ÒÊñÁŠå\nEÂB¢	ĞSirUW˜‰A†=åDƒZ—5®¦b•L¶ì¶J„!c‘	6hÊeòO· ‹%ˆ&B³’%a[KL¡‹\"'Ò‚ŞG;Å¾ãùp	tÊE\ngT.e®¼­0ª²@L„\0É\nº {Æó=ßÙV2P?ÀÏ“ÃTÆœ`Hü`CPG5˜´2Øš¬ŞréW»º¸6Ó7O	Ô¶ KF[ìÃ•\$	™çÖhƒ!Äêº¡vQª•/f¡P ['µ¨õXŒ±¤\0+Ìšbš.eĞ¹);r¾µ,»æ§,˜ÌÈ:á!ÌŞôŠç+ÓÃÍÂG³t~ŒŠv™›!†gP—·ù§ÁXÍiJ6ÀdÎ#ã,Ö@é05[L@Ip\0Š€\n÷;(ªÉ¦8‘1D°ß¤;\$]Ä>=P^s±½SœÉræÀX±£Üiİ’êGù‘¦6‘½—¬Œå´k©\n@R1¥½˜¸dŒ¤¹uº¯)¡lçä^Ù+A&S2_¡\\÷Õm¹6„j\r\r<=`nU”©òÚòƒ˜Q,jz%á4k¡œÏ ƒ)ZB®‡å^°…hÎM˜Êr¢q<|X½nÙ ^^r°†ÊaØ™(l,xäßÂæ}xà€yŸ*'©—ªHhy}à«Ò¨_a„€ıºhC?…ÚÍ„•\"(¬:XS0Ğ`ˆW>Ñ‚øÀpP&fØãO@núd]>¹Øâ4é>V—ÀÃ¦+Ä\\å2ĞvÌ'(9+›ıT¬aQ|Ff‘‡°3áÅsèaTñT­÷Z¡¶¨İ×Äj \r²4HiR4±¢š±\$\$ÿW½blÑ)¢ÒS¤Ó0.bH©P‘ÂEØ‘P'8,Ò@ˆìWÕ:0æZÒ¡ô,gF``ZµªÔ\rl/T0 p\r¦~ó¬8¤êxŞ¸H|û ‘túë¶»uŠP-xJZö³¤kºyƒÒ=÷Z²Pë,|y@€öCD¤&n»ŒcZ>xèÀ.£F!’İI£^ä>R¹„õb‚J—SàtØK‰\0Ğ'–ƒĞÌèÓnÈÀS!­‡XÓdbFØ@TZ“ô€•”'\n®ªä‚ÈS\n\\ó›\nÙvlÔDò‡Ù6ÊÍC=‘€·ec/Ù{¶?³#ÊlĞÍ 2Ú8¤6?³´lú¹4q¦¶‰´½®·xÎÿbi@@ÈQÍ^öï™ÖF…°íqìDÛ{Ø¤Ô¶-~`¬\r€\$É}Ÿu°•Tcg£P~ÀõRWİ:q;Øãmqªblä [H¦¿v@=ª£kx6Ïñ&û Ş÷WİÛĞZ*G_€÷i¡!’ª\0cºp8;'m }İVÖ5@gãÊ\0¯h¤{Ù¾ïv‚ªÙodâY –áÇi¹âm#u;lfÛ¤©7á™êUÜ‡­ÙÈöÓ½«Û“ßU{‰>Íõn}GjAe\"ç\\ûŒ½­KÊNP¯ÌÔâiÅÑU0°ë³|µ?2NQQ¿Á.RJ•¢Õu\r«g€º„ÓÖ©†\$#¡ÂïkS”Ğ-e·à¹”åO°ı\0V‡Ğ¨¨{M–›5è7æ=ìüH‹r’#\0_ÂÇ)@Ã#ŞPM^ÅR`ü+áo¸arp„	¬âvÃ<‘§®KÈkœÊ1„Û˜bp”4\$ê;e±„;La¡®˜‰ñ\\×î°øfJ@®“œBáôĞ‡ş\"\n\nO@-\n\\º°9€°j•øÁq>ô5BÖæ IMx´º=¬OêA^7Ç«`ş ½Gö2ª:;òzS6AZæ+\$¹¤ĞÃÅ4V­ÂÍÀ!Äÿ\"B&k,Í0%ÿãº§2\"ÌOñ7\rmÄø[1>ú÷»>Å1à;Œ\\pÊÖ{VÜÅ˜#–'ğı‰wBg)9¤†‰¿\\±ñxŞå}7†Üú* £[äHÎ‰sÆ4,T¢Äšew+Í§_ŒH@:å7È§Í±t‘íÆbænĞvgÍ±íGš§ÿ9tûƒÕØóÛ`8=æêpùÍ„p»'N4ß8¹‹Xq÷Lä’È¸ğñ:òw£¹é„Ûç¦ÈdÀÑğâ‡\"áFÁÊP„—ü”§@\\^å+šô’w3PùxÖˆÌq;øKån%mæ´¨-…´");}elseif($_GET["file"]=="jush.js"){header("Content-Type: text/javascript; charset=utf-8");echo
lzw_decompress("v0œF£©ÌĞ==˜ÎFS	ĞÊ_6MÆ³˜èèr:™E‡CI´Êo:C„”Xc‚\ræØ„J(:=ŸE†¦a28¡xğ¸?Ä'ƒi°SANN‘ùğxs…NBáÌVl0›ŒçS	œËUl(D|Ò„çÊP¦À>šE†ã©¶yHchäÂ-3Eb“å ¸b½ßpEÁpÿ9.Š˜Ì~\n?Kb±iw|È`Ç÷d.¼x8EN¦ã!”Í2™‡3©ˆá\r‡ÑYÌèy6GFmY8o7\n\r³0¤÷\0DbcÓ!¾Q7Ğ¨d8‹Áì~‘¬N)ùEĞ³`ôNsßğ`ÆS)ĞOé—·ç/º<xÆ9o»ÔåµÁì3n«®2»!r¼:;ã+Â9ˆCÈ¨®‰Ã\n<ñ`Èó¯bè\\š?`†4\r#`È<¯BeãB#¤N Üã\r.D`¬«jê4ÿpéar°øã¢º÷>ò8Ó\$Éc ¾1Écœ ¡c êİê{n7ÀÃ¡ƒAğNÊRLi\r1À¾ø!£(æjÂ´®+Âê62ÀXÊ8+Êâàä.\rÍÎôƒÎ!x¼åƒhù'ãâˆ6Sğ\0RïÔôñOÒ\n¼…1(W0…ãœÇ7qœë:NÃE:68n+äÕ´5_(®s \rã”ê‰/m6PÔ@ÃEQàÄ9\n¨V-‹Áó\"¦.:åJÏ8weÎq½|Ø‡³XĞ]µİY XÁeåzWâü 7âûZ1íhQfÙãu£jÑ4Z{p\\AUËJ<õ†káÁ@¼ÉÃà@„}&„ˆL7U°wuYhÔ2¸È@ûu  Pà7ËA†hèÌò°Ş3Ã›êçXEÍ…Zˆ]­lá@MplvÂ)æ ÁÁHW‘‘Ôy>Y-øYŸè/«›ªÁî hC [*‹ûFã­#~†!Ğ`ô\r#0PïCË—f ·¶¡îÃ\\î›¶‡É^Ã%B<\\½fˆŞ±ÅáĞİã&/¦O‚ğL\\jF¨jZ£1«\\:Æ´>N¹¯XaFÃAÀ³²ğÃØÍf…h{\"s\n×64‡ÜøÒ…¼?Ä8Ü^p\"ë°ñÈ¸\\Úe(¸PƒNµìq[g¸Árÿ&Â}PhÊà¡ÀWÙí*Şír_sËP‡hà¼àĞ\nÛËÃomõ¿¥Ãê—Ó#§¡.Á\0@épdW ²\$Òº°QÛ½Tl0† ¾ÃHdHë)š‡ÛÙÀ)PÓÜØHgàıUş„ªBèe\r†t:‡Õ\0)\"Åtô,´œ’ÛÇ[(DøO\nR8!†Æ¬ÖšğÜlAüV…¨4 hà£Sq<à@}ÃëÊgK±]®àè]â=90°'€åâøwA<‚ƒĞÑaÁ~€òWšæƒD|A´††2ÓXÙU2àéyÅŠŠ=¡p)«\0P	˜s€µn…3îr„f\0¢F…·ºvÒÌG®ÁI@é%¤”Ÿ+Àö_I`¶ÌôÅ\r.ƒ N²ºËKI…[”Ê–SJò©¾aUf›Szûƒ«M§ô„%¬·\"Q|9€¨Bc§aÁq\0©8Ÿ#Ò<a„³:z1Ufª·>îZ¹l‰‰¹ÓÀe5#U@iUGÂ‚™©n¨%Ò°s¦„Ë;gxL´pPš?BçŒÊQ\\—b„ÿé¾’Q„=7:¸¯İ¡Qº\r:ƒtì¥:y(Å ×\nÛd)¹ĞÒ\nÁX; ‹ìêCaA¬\ráİñŸP¨GHù!¡ ¢@È9\n\nAl~H úªV\nsªÉÕ«Æ¯ÕbBr£ªö„’­²ßû3ƒ\rP¿%¢Ñ„\r}b/‰Î‘\$“5§PëCä\"wÌB_çÉUÕgAtë¤ô…å¤…é^QÄåUÉÄÖj™Áí Bvhì¡„4‡)¹ã+ª)<–j^<Lóà4U* õBg ëĞæè*nÊ–è-ÿÜõÓ	9O\$´‰Ø·zyM™3„\\9Üè˜.oŠ¶šÌë¸E(iåàœÄÓ7	tßšé-&¢\nj!\rÀyœyàD1gğÒö]«ÜyRÔ7\"ğæ§·ƒˆ~ÀíàÜ)TZ0E9MåYZtXe!İf†@ç{È¬yl	8‡;¦ƒR{„ë8‡Ä®ÁeØ+ULñ'‚F²1ıøæ8PE5-	Ğ_!Ô7…ó [2‰JËÁ;‡HR²éÇ¹€8pç—²İ‡@™£0,Õ®psK0\r¿4”¢\$sJ¾Ã4ÉDZ©ÕI¢™'\$cL”R–MpY&ü½Íiçz3GÍzÒšJ%ÁÌPÜ-„[É/xç³T¾{p¶§z‹CÖvµ¥Ó:ƒV'\\–’KJa¨ÃMƒ&º°£Ó¾\"à²eo^Q+h^âĞiTğ1ªORäl«,5[İ˜\$¹·)¬ôNô\n«[Ğb÷ƒà|;‘éîp»74ÍÜ”Â¢¨ĞIŠCË\\ŞX°ç\n%øhØIäç4Ïg‹P:< ôõk¦1Q™+\\ÚÈ^å’ ™VèøCàòôWàÃ`83B-9F@ànÃT>»ŞÀÇ‰-–¿öÊ&âÜ`9q¦…Çßä‘“PÜy6Üå\r.yñ&£ñ´ÎaÌ‰ÍÃE8Ÿ0 êÀõkAÁ×VÛT7ñpïÆxØ)Ş¡~¤M½ûÎß!áEt§ĞùP\\èÄÏ—m~c½Bğ\\\nímŠv{µÎù9`G[·¾~xsLî\\±Iõ®ïâXwy\nà¨çu¯áÁ™S£c»¬€1?A¼*‡ùÍ{œã½ÿ´óÍ¿²vDT!è%XK•‡'ñ§‡ò¾[Ëú½ë¼Ó›(¶,üŸ3èÀßÕ×ÿ[È³>–á]İôN!ã;§ÀërßÈT`Ä\nL\n)À†‚(Aüağ\" çè	Á&„PøÂ@O\nå¸«0†	\0Š	 ‚0à^R†J\0ˆı@‚@‚\n`Š<ïFëÎÀæîÄû¥*Ì|ì¦*ç/XíM*n/\nğâ&Ş¯kx\"m8È‹’î®(ûxiÈdnÌ)¹p-%(ìÎ³¤ÛP\"øÂù®>ùë<ú&Ê³Ï¦íïªî.ç¯…OQH*Ê‘nÑĞŒĞCë.à÷°Jñ°xø.døn¿\n/O¬½ìŒ °¹	p½	°ÂûpÇ\nŠç®çŒÊú0ßp-ï²îÎ¹ÎÃ\nf¶èë€ b¾i¶ÃnüùĞ=l½’ğĞºñPäûOæ\0NìÏFô¯Oñp<`ÜĞú\rpI1	ğÑŒ–@±+QYñ]¤Mà\\©\ng«\0‹ Â Ø\$OuÑ8úïç¼W(œl£‚Kj¦¿äN&­j!ÍH`¦_bh\r1² ºn!ÍÉ«ncq5qcí\\«¬\rŠíŠÃ`V_kÚÃ\"]à×1xˆ«@Ê¾`AƒúÀ±óÅ¦VÆ`\r%¢’ÂÅì¦\ròƒ‚k@NÀ±jñÍš™Ó²@€© ©ÃkFJÂÂP>VÆÂÔp¨²\\%2bÂfmÎóØ@ä’G(²?MšM\\ÉÇhb/jÜD’ù¸}(VÌKË ‚K¬L Â¾¤!IÄWòr \r’\$ÃÌ¤Ê€QRp%’tÔdJ¨¦HÀNxK:\n ¤	 †%fn‹ã³(¨¿DÌMü À[%âT\r©ÀrÂ.¦LLè&W/>h6@êE ÈãLP‚vÆC’ß6O:Yh^mn6£n¼j>7`z`Ní\\Ùj\rgô\rÈi4	\$\"@¾[`Â¢hMı4Ãq5\$’ş\0ÖµÈúys@`ÖDÀæ\$\0äQPH1ƒ&‚\"~0€¸`ø£\nbşG¼)	Y<\0[<N¨dBå3’€Ø‰*\r\0c=ÎK|İ7t¾`ºÀÀO5Š5?\0å7`C@\0ÂW*	>ÀN<g¿8P7S‡8³@É{=æLÂ.3˜DÄê\rÅš¯Š¹	*¨,rîg±I1@å/Mo2Î]3Xm‹ôLì4eB”Utm5ËÔ™@e”cGÔiE‰\rFóçG4‰#S÷%QåEà@‚H(‘Óˆ ÃÆ<g,V`R]@úÂÇÉ4ãr7s˜ÅGK³ƒAÀvÂÓ25\rVß¬ ¤ Î£PÀÔ\râ\$<bĞ%(‡Ddƒ‹PWÄîĞÌbØfO æx\0è} Üâ”lb &‰vj4ÑN4¼¨Ö´ÔÒ5&ds` Mñ6lÓ\".HËM2“-31Ns<ÂÂ/L óàú§`Ø§µBUF\"UJI5OSm3S´×LD”g ’5…sõjšM|5\$¨s\$Ş*¤pU,´ÕbÔtD7@¶ÂÒ?’Å\" Ñ\"hªµ£}Qã4F‡4•@y”Ú@Ò)õ¸‹Œ0o<> ]Jnš„Æ¿s›LGPŠ›ê™j™M^’ÕVÉ\$µ]‰¥PuÕêÔséE¥­@xy’LHêÆ™Md×5Z52f– ğ–k!?í`J`‹IS N¡¥4'Æš*œ*`ø>€—`|¢0T™DJ£Fxbè¶\rTLTØ“W5õÜ·é‰=õèz`ZJ	gÇºİ CgÍéci\"mñcçÇA”¾ÕrÜÖ*‘T¹l…'mÚq zß ûl¥lãmL´ÁlvÙmÀö\rµó8¶©êª úíkR¶ôºÓYS AC€è‹’ç4‘â “p)Jk£Ü-N\n99hvŠY‚BmÍğ;uÆ@‚<FşÑ ¾e†j€ÒÄ¦Všà+CY\0ğ0ç ¿\\qÑ1í=òßkFı9\0KG™*ràhş—]v˜9ˆ‘ íbÍa•¡(ò’pL7ÎÎ—¸&—¼¼l¬Z-M¬w·|Lr—¸@iU{¿|¯l¢·¦ĞÒSBÀ\r@Â h*BD.7Í*‚‘3/a€\\5bp#ÅzW¨?£İ}¤‡`O}Õ@ŞÀ×é­~Æ\$õéœÉúÅökÈ;a€QaD]µ[Åúp¦f€wÔø\"â3 M÷Å|*´Õ¿!õÅ\"`¿|\0u¸÷¹\"¸zÓ8\\2Ét²(Ê‚-‡ÒÁ\\Ç,¸¢Ê·Á*…r§€ÊVRO-‚Œ˜İ8s‚qSwx:-voY£İ\0ÍQÂtÎøÙŒï¢Ì0AŒØÜÒ°Ì0ÙxõŒW2ÌÍUon€˜Y€ãvE€ÌÈ­ïÀãìú=IP˜MP\$­…U€µ¼8l—x»øÁ:ØÎÌ•1Ís,£‡€Sf6Ì‚tÍ/£–ĞÖÌl³Œ¾Ê ÚÍyzËŒÜK\0ÊÎ¸æçìóƒ¬ú,ÿ)ª)	‘6^x‘Ø!wë’2 Ï“Y“djØY…9a‚6´Èp5\$–D\$ö¼³?†øŒÑ¬Á‡ˆÂ´ÀÂŒ]dõˆfoŠm3ùòLùÙ{­ûVÆ…”÷rÌxšXW€Ù«DAeÙ½„µ½“™Ç“øY”B1”š\r‹ê	8føëx•– Mšöğ@îÇ‚³­%£Z!‘º%e Ú]Y3QÀW•“ÙË”8[£¤e‹ÙO¤X‘¤™YˆúN¡ºUQkLöÒ=¡ÙAQ9¢l÷§¿¢ùÂ^Ú3§õ£‚3¨yM¤:•L©¤ºzI¥›•·tÎX.0ƒ•,¢#úeàMzØ\rkRQmšæ’Úë6õÚ[‹¯õ¤¸¶ Zâ?·¬Ê	±ö¾|¥œ+GÎ€f6X-Z™›e˜“­{>¹²O;E‡zI´»N!ÛRJÂ\0ÒÃp›Khâf ÌmÚğËšõwÌ- \0çŸB+­9_¤™ëŸùñ¸:Ÿx‰·û“¸Z	“½;”>yÚ—¹7Õ}÷Å}×Ù|Wã™Ù¯´Ø£E–ûu`JÜø7|X•¸äåŠ¸‰ø…\"¸‹² W½˜tJÙé…Â‹,8¯Šø\rùı¾;ÿŠØƒ,Ò+Àmû¦Y©¦š³¶»öñÑ¬\r²™·›­ı«¸}£}šzÇ¿ÀØ_È8b³¸iâ5=ˆp+U¶L‡ò€‡:¬Ú²{@É*ÁÕª™¢<#Ç-\r¢¹5«Úy“µ	œœ@ĞZÉÅ|l­'„Ûå‰Ø±†œ7„±ÈON?€ËU%†€uÇ¡6­}\$­}x!»„¬ÛàùŒ‰U¥š]ª@øğM¿ÎYhÏŒÁ–üó—9ŠÌ™xÏ¹€Í9†ÎÁ®™ŒçÌñ¡Y”Ìü(ÛÅˆÂ™ÇSH1ã£ü£Ä\\Á;¯Êù5Ë5#Ëœ¼?œÁÌ@CÌÕÌÜ)ÍD®@›¿Íy•ÍÜæÅú[«;Öz ËoÎùq˜8ı—L¹İÏL£Ğ|û¯;	Ğìï™,÷™yšéù à€ÒDõÒ‡½-q…„Jí:ÄĞGÛMÎßÖ¼ßXL\\ÆŒÆÈ;UõÊ×Œ€{+Å¼ey·b9ä’×j5·okMk[¥‹ˆ€f(\0æ¾dÄšÓ¿©´\rìMÄáŠœ¾|«ÔrâK#J\0š ÜMÌ7ˆ Û'ƒ=_›À1=5ÁèÃÆóÔ>+åÑéä•ãíø¦^5ã“Zk^SâX¡å¼·åşæ2‘æ`·èhãòEäDÉá)²¿à[äşç|©ç¾)Ë¾aé¼^±ã\n+>qu*­õ(pM>Óm<´ÒuMŠãş‡ìnT¡8ÌT£M>g¨=½ÙqEI7>á~Ş+¾ãmÊS%6\"IT5½€çï\"™ï4‘É\rë^‹±Şç–\rkŞKe—{ˆjÓ“{‰(ôÈrO«óäßî¤˜T=·÷Åô.|ÿH\"ef›~Ö~íõ\\X¿R‰›·ÕETËdÔŠ	w#q¯Ÿ‚\"Ÿ‡C0T<¿fMÿ8‰ŸÛØ:'U8ãùÃİöŸ¢àwó°	‹ÍJ @ÚV½í4Åù‰d~…p	{>İüşd~üS^áúşçú\n7`øøƒ@Iñf¡7â= ÷¥¾AæpR„dşnø¦*my¤—«R§	¡,¾dB°¨÷g¦'½ïüğıÀÌÀ€‹ı¡\rHßş” ¬ñ~b1øyT˜üR÷|mÏ4yÁŞ–òG…¼5ôïU»Ê&òç«=Dy¨­nŸÆœµ%Æ/zuŸ¨g·ë/Î\ndÀÖû“U?\r¦ø@,†,‹¦Ø éß‚É¸ ÍPü¨•I(•ƒ9Ø˜å7\0«‘ê¯|cä†É‚6¼Åé0>WóÂœõ!Áİâ/SƒÔ øLÇ¢!ëORb“]ØœW¥Bé©„y¾—2ò›ù^ní[rµ[ˆÛÀ7‡ÙU\n¦QK¡aR }ı\nnS‚œ€à¥QHMë>7:–\0P°Âä]FUS\nÕ:8W5í K>JA\rŒ\n îO¹2aa >ÃR­y…{AZˆ v=²_Ğ©4’¬!ZËÈq´20³) ”Ş§9ŠTîO§w‚ò0V§{‹Ì\"NúHĞ!æˆb&VË!†D:z—8s+æ Ğİûù!ÀÖØÙìï¶cÂ`u0î£ğ\"o`8•n²4]A’Ğˆ¨–R4ãÀ5ê„²ßT©\n\\—\0	¡\r˜TòØ¢\0°k£fÙ±ˆĞµªÄ¹_o(&!FğÂÂ*ÕbdÊwÈ¡ŒLe¬¶.À!‰Á\$fzÀ>š1¯Êól¸U.u‘÷@tV;¾•œGõB]J†w!‹L^at½J/,^8m]ä¼¡\"±r&(Š*’¼š¬µ¥zÅİ°NŠ(®XÕ€ñ)E*ÀnØ—Tì§€ä¼å\\æ‚G‰x„¬úâ„Á‰7p@‚\0(0 TOà@št¹ÆmC`-H€¤D“:4Ñ¨ ´cV'@\n±¤”iãS`3Æt	àBP@‡ÀÆÎ7ñœhÀÄşP‘Ë\\s€˜s÷T\nÑœmc˜@!<€Yäu#‚Ğ*	àODt£ÍĞ*\"<±Ş\\|OÓ2gGº>‘ç £æp1´£à-qcXß\nQ,Ah€˜ğ!,\n Udl@NÔÈ, - c¡ 'NC o`³d€Ğ\"Ç¨	ÑÈ‘Ti(aŒHÒ-Oä(\"{F²71»Dm	YÇº?1ò‘¼q HâG9Ê V\0Ä?pŸÔ	ÀUOáûÀ¨':52%\nĞkB¡È×FÂF±¯?¬jFà	2\"¤Xğ)6LÅ7@@°@ Ÿ )ünÀ©%™9É¢5²d´˜dÊ)I3Èn@²J,ä\\ôèÉ‚P’c“¥cé='òOr–È\0ZÈÜ.SQ©#´ãq©%È\$ò¥0¢äÙJ²=ø<|SAÈ<:p»ÆÁw“‹Ôa0­Ô¡Ã#0‡€à2´\n£,'¥H21åoQ‰¬¼sRÈ ÛbæÅ™]˜Í²àg•òWá-w¸¸Ş \"–bE@é-AÊååf/b#‹%-Å{Æ,Ş‚+ÏÉ+Óz€Y€#˜eÑ+‰oºq{®–Ère{/KÑÓrë^ì¸e¹/™}Ëö_âÓq ÀL03 LaÒ¾w”°¥œT€ AÀ&–™R\n™,)s\0ì©–Iõ€^2q”Ë©\0\\¨I@‚	‘K(À#peC*!>€/á%|Ê…Ì“áŞüô\$è‘çÀ§.ğ™‚ÀmX@Rò0cĞ€üô!IH˜UÀ³_\0ÄÎ5–±¦Œ)D¹)ı¸\rÂ˜ÔÁÓ#5?rfgr›IæÖÜ¹v3ö]ÒÛ˜äÜ%”¸&ºn`\$›¨L¦îİeîÍ¶]ó}–Ù½g\0Àvps…\ròÍ[ªÎÉÅMòa	W›ôË¡ü'È{ÅH*–†fU@9!¾Å	Ñ'¬¨÷-òÈøß@_.IÃ3öu;Üì¡;)¹\0²v¡<—ĞL†iİÎ¸ Êù	Ôğ§lÀMÈóÆI‰Ãà	ã~zËÿ›”ô'i<ùè€¾zdèl4§ğ¸Êv3æ~´øÃ)ö\r4ábpî‚dIäOi³ö\r™£Øˆ¹ØŠ6x _„ñ%õ<éâOó« ìç…@YÛË’· Q£Ã 	ı…’`.\"x@‚Ğ-‚ta2BÈCçÿ@JO~4\$säâa¥A\0PJS¸`…¯A‰Û‚|iº¡ÀO'\$«P‹ìÕJŸÙ„(ˆcX„Æˆ(Ö\$\nSv„öPÉ´\"ğ\0 3²›~á'\\ã3	Ø6q¸\r©ü£6ÀBØ7á™ÑVŠçL›ÂPaáEÑmh\"N\r€Ø‡(NœF(‚ÃlWÈÎr™ÀQª‹m€—ÎnÉú.f‹Å£\0ÚU6Âä2|Ê\rh%:ÀæÍ½¹“ä6£\"Ò‚Q±œQôm£”wY™F+š>’BDKÈvH²“e±¢íM´°\0gJñ¥\"àMº5Ñd9n¤0¢é\$Éğ'\0æ4‰£¥èïI´Ò™£¬¥)é“…6-¸Ú\0(*¥Yn<QªTmpQ{¥Ø)ÀJdÉyiåÇ{u ¨ØGªbQÁÉB.]\"e©Ò'¢ƒÓ2“ÔË+êS®{@^„ÅMÒ#Şœ¡rà•kH\n*>Œ!â¢İ\$'6ã}ÔJ‘Ôñ9½é@Q¶&<µ¨ÍDê9LfSú’,¤™),ÂRd ”« +B!­Fœ*š.°BijNÀR rI¨`Îf@\n¢Ì¥±©e+9Jø©:bœ‘}§==©•Nµ{SX[u(¥UD]Os»”Ú›åÈ\rNÜ_SêEQÖ¨5)ªjS²4ªV§e\rDMW€ÉVfv§´«UPª&ª·D5ôcXmGŠ’Ôn´ò«µX)óM‚VÂE¨¸+%,èT>ŠkÅ©J\n+0\0006**¥E>\$qhŠ@O\nüd‹PëYZb”V­N¢ò¡\0èœæØ„d€B\0…5E•˜;ÔF¢uŸ¬ƒHşI%\0…h?¤=	…â2! (¶¹!^*è&Ÿ\\¼n§ôŒ+QIj&¼A¡´B`S¸âM‚ÉûŠ\r o°@‚À6WB¹B{¯@µ_ ¯)Òº%M©fÍğW ä¶˜_áÎ°v@{`P:¤®%[%{C³\na¼Ø8;AÆˆğÌTn›\0¸#ÂN°°áŸa‘hÒÃ©·˜J´6ë›âjìÉFZ57‡VÅuŠŒ€C`\0å»S±0uMÒ%;½D0\rÜaayXô\rôkoÊÆKMd’­bI²€ul˜Ue‘p\rë^²¨Õ»dòÿÙ*f·¬éH_<Ë-ğ(¶h²ˆ‘,ØRX†°©°ß{%˜\rf!œDoğSµ˜JµF²4ÙfÄöH³ğul¾i›.ÙŒİ {™Õ`q™Æ³Âq³xìÕZ4ÙºĞ–w*Õ¡ì©h[%lÜããuqé¢]	2°E=ˆ{F·Ï6­µxÎ\n*I*ğ€ö¼uåIûv+Âºè¥ä5u”MtG^‘	×â½Ë¨nÅk«F²\0ô‹®\r€Ö§[gÑ–ÔÂI#CK]8’¦Ôû®™#„ J\rÜ°4€,·ˆ¤( 'C¶ÉV¸µ)íkTÉ[Ü>Ğ¶™ƒbjúØ’µåA-<!Mpxjß@t)A\$­Î±!ûÚè>µä\r¯aMkûrÛ;5È¶5¯í“]Óœ=ç¬@k)‚;Ûo[–Ô•À·m¿\\«•‘şİ#jP5Á+NR+„ÅÂÚ“¬³\"–\rdK2!âëÆ²qÜ§ªiÁhkYB‚[À¬[çî9ÊÙV–æÅC¹É½@xŠl/4-Áˆ¨Ä®”.‰œÌºf*EĞ\0à\0.†wC#,ËNT³ 8jã%8S®óvAˆfìâ–^ ‘\nF§Z§RºÁâËh„\0P7²;Ák@<ˆHÏF5`•\$›\$é7JĞJĞÁŠ¥ı¥³èA«j \nÛ¼\$£!éÓŞ»ó€¾L™ÄĞ»~/†2pµJŠ»²€İ2m¬ÒVf¶ğ´ëEu+¬Ş”\rJ.%áÉh›QBšİàe·ˆì”µjÖYt¸†é¾Í¨[;PYÜ\$Z‹=e/»iË8;¶Ñ‚¿\nM¶zR‹Gßœ\r§µ(C+p-•©Ì6õ‹};êÙ(İêÈ·õÿ®¤˜ûùYà*Ë‚&m;€ë+àDÂÓ¾ukJC|›.ß~ù÷áÀª„ZÚVØ»W÷`Fp1}ìZ„b&¹%Ãà1H|ÖáÎ,œDeH\0Û‡Â6°%„¬a+CîÁ–…5†D°)\0„„„p÷Ãëjë}ÚÛĞ¦®aßÚ—6– Eà'|1GîR¹Ú¤hBúHdº'cL#Ã	.æÂ`H€L6‡ŒHƒ(Õ†W¤/ğ\"¹¨ÇŠN\rDâ¢¦~M.ĞŞBŒöàØ,«–»¸¨°Ü^¹òF–PAå—0ÁmÄ…‹ªµ”søW\\DôiÒŸd¹)½Å©z¢›ŠÎ^eÿ½kpHÜÅp@à€auq #/qZ§\\W’:U˜¦%ÀEşr,- xÅù#±‚/I#\nû˜Gø1¢9\\eã6Ô‹9WË@ràâßXÏ¯aGÀÍ\"P;°<\$,¾N3ë\n=*@\"G¼†!€\\ÒĞš,°m’Åp|q„\"À‡L6âŠ\\ÈBÀ[†R¢ü¦ÁC1M‚{ôYm]˜)¶¹¯’Šÿ•l\rËm1U€2.3`Ë#€yÁ–Gğrl“­µ‚(·8ŠÓ,Œ*âR#7ô§¾=«rK°ô[´!mØ¯JC«àIa˜†ØbTLCµ”lKŒ?™?Ï\r”FRãt!aÙ§ºíF„Gğ!¹CµŸ»v2Œ\"qW·ÖÑ»ôÃ^À7áñFâRì\0ÎÑf°*àA\nõÆí®Háã¤¾)9=Çğ—\\+`¬ä=Ê\"ø}Ï>HÑ\\p°“¨Öç“;ĞN‰Š)>ˆB'ŞÁê\0€€#%Y+'æ)Ü^{%£@TÊ†JzÒ¢à]…šd±Üú#q¸X&à£‹{4)×?™ı@¦só\"O A9ù3€L\nòp&py 0	™º@pÀ§%€'x)‘ıˆs‰%y,ç\0àw€œP+§R9ùÍ<°iïšIıÏN‰sË{ìni9ÿ3ô¦y±4{}¨)CZ€¾‡Cg\"şf\0[™¬ÎP”9 ºNkZ¥šYèf¢„YªŸ\ng¡\0gñÄth€€€YüO(^sø ˜Ã&}øû8’@p\$~óø\né¡û\0Ÿv0¸æK>™”4~lÆ†¼Ë€¿39›Ìî‚Æ; İæ¾{Óıd;lğĞ¨ú&F…çŸTI‡Õ|aíÏÃˆØ‰Ÿ½&N'?ô6O4¤!è'3ÓôÍ…‚W¡)\0²v€2	æ•4@]RL.ºVÖ4šŠ\0¿J¹óÒ¾ŸÚ%ª„óPyŒÍ}è3?mBDuVããÑî–Hî²Ø,Oˆ5 v°ĞO£] 6€¼AÀ/n§Œ¼ñjß÷¢G’eäÕê`Ü¢m6§u?<}Q[Tš¦fª/~osG,7 -°È´õ… <P;XÑŞÖì!Ûixß 8ñn²u¡ £kÆšË`¶S9­}nÄd¤.°lD¿¬¡_Èg[0û&¸÷­RâÃ[šï0˜Â¼¢yëgYÅ\\Öà,\0ë°à×óÃ5à-yk¤R’O>±Y®†WÖ¶·”ÌÀ9la!EHÜu«\\9‹\\Xzà1VÓ\"@º†ïd†s¾Ã†'­•ì›`[1Ùn¹ @ˆ‡Ãf…i1 Avw¬—XR›%Ùht!°˜kpdºà.Ïó\\İniÁÚ†Â€N4 îíLBÄ?Öã\r„v'k£c’\n	\\Mƒµ­Í×´fá6Æ¸\$K”í°íC,P®ÉîXÍpatïOŒè0dƒ;\\Ä¯€‘\nÒÄè‹Ï[‚„–0p@ZŒP•lGaÚ®ØØ&— €‰L9O=>\\=ip¼0£ûüévÈĞÛ‹99ñİ€BU¹ñi€3›¥´@ó¹\"´„®Ccä2™Gñ·(ï°­!µİè³¶“µaB	LÛº¢ã5ˆåU+wŞ6ğ\0Nv`È bİ½z×\\òïYŞA€¢ĞwC¹İ×îÓc²ïÙ>ê73º½òd9æİné7Mµuîƒ~»éßº§wõ¾fª²,[x¹\r¼-ı‹7~œ\0–ú¶È–oû&Lç÷G¿ÍÚÆÔÇ€h°ÜwâXÎn»€;÷9Ü¸+¿şğƒ '&Ø²Mj•ƒƒâÃß6ì÷ïÂÙp¿†2há>ìwgÃ‰\r´52f!ğ³€Ç­ZK½>½ r×ŞÁ8]uBªìS‰8åâf1µùµmñÊ_ŠœMÖæ©O¢V”Ó¥Œ¼8m%÷¬Ká’ú¢Ñá™¸kE>aq\"ÍãVæøz+ıÙqÃ~ûMI‚€B½²àØk€#Ç.İŞëÄ…È/ëƒu#\0#Ñ@[r­nr.ÛœÙÎÙö­É!aò8`˜%nÊ¹#\\I…hÀ-äW(93Ê én#”sËäùùBp®^{˜İVæø»<pÛ…tsàˆ`1ÑÆİùîƒ—[ë–ß09=Ë=p¯|sÇİNæ£;Çp¢ñç~Jß¿-ÎóüÓã7™Ã(ók˜\\ÉÈÏyÅÃîr\nPT|çæG77î!²ó³š<Ã „)ÑaóÈ\rœÒ,gB\$E.:ó?|¼ãçw\nâlû‰ø¬5Jæ‡>ùé½}ìì{œúçà°øãÁ]j¿nÜKW·ta1=ol>§_€`8èŞmóôLüğP€óŒnEh=oG¬7½^‘Ó¤œÏé>ÛyÑÍÁ¦åé6ÆOmÈâj„sìfüúsÓ¾š„¦üx†^n”ô[~ı1WÜµŞH¨ô§R	^ó÷•Èé÷õd\\qé°}z]®=á{vı\rè¯ZøH`î¤q‡™7ëPr8âÁm–ïOwÛÇÜ¶á@=Ã„ß?çé2“]©UjSOé¬ƒf¦µkÅã/jƒW cÕÙôu}ª­`ŠPc¸ÂSpÜï˜z‡{1¼!,¦@zäŞÀ‡·9Ã@ö¼tÛ±ØZûuÚí^&¸:ØÉ®¸×Ï• ã£r¬.Ê6GÛÀ©öûW‰—æ¯p{cÜNGœ§¸äz+NP	)È.ëwX}ÆÜw\nÔCğqºúÃí^€Úİ£kÇ°œûïokwûİ®òòÛº=Né`@wo\"P3ïÿ¢İ¿ï¸¢;·ß®Üw÷­ş\0İ}B×şüu7uû\rßnzƒ¯<x;¾Ü„»oÆâ´…b½¾î‘ôS/à¯îCx2â\0E)ŞOv÷©ÍÊñt<İ?x¿>íÇ6ÅßNÖx?Ãñç¼I×ïs(£üKğÿ0|mâS/&_°ÚÇ|— ?sš>Y,?7ï•&w·jğÜÏ|»Uä\rù+‰’ó…¼È,ï3x7Í*ÛDzcÇx±QVó^Æ|ÛŞşøí#Ìàsíi%\0ğáHÈ	ßb~|ó§¼ÇèùyËĞBæSp|›å®}ùs.»£qéM]ªİIæÏg«\rÕO5i©Î×ökT}¯ìş°:_´?+ùûÔ~oÚ?¤wbdnÖá`àxõç£<Ùë?HwÌ~¸ô§cèŠi¾É1ãGáïÛ¯–u ıa­éğÔ’Òˆ·@ÄsğŸŒ\nA†\n´‡dÕp)€,@s‰+‚˜-à\"X²+/¶OÉíÀÉfTç%O¼@Œoy)ğHÀ'}C*Òxw¾½Ú~/w†`[Çá<œ\0“&ûˆ,a˜¨½½€\"‡õÏì~0&Cà‘¢:§¼>/î‰{”¢÷€À£3şÇ.ßÈ·‚‘òsòò7\0VxÏÈuAoZMgû÷iüÀ˜-ŞÿøÒî~0/ÉüàBÄƒÀïYü>çøşHSóèÓé_\nöìŠ~1îr{Ü¡¢÷Gº¤V5O°Ÿ«ì`:÷Î>Ğ°|¯ë€+7Åc¸Ièü&û7Ê>Ó÷Ÿs|`P?pş2—oƒ\0£î?ƒû'¼@ïŸz?Şşù÷ßå~*™	ŸØ[ß}gÂ\$ïïP)ç\"Jÿ[üTn\$:Àı‹Ş „œ\$òŸ½üò?“ûŸİœoÃü«ñ\"Şï¿~</ØıËŞpñú#CœO€ûÃáŸø‡ÊO)ñO‹~ÿã_øğ?iû¯’şWîßÖûĞP?+òï˜\0­ÀCù˜>jo›şüü¿;ùïÏş÷ô,ô\rPı§ïş_åş0üËóoŒ>öırNÏıÜƒöd\0¿jx\nOÜ?ÿ\0000¯u€ˆ¢JÈÓ\0’úKé`'¾šúx¯¨À4ú£òà'¾®óë/Ö?ˆúóò/ç\0‚KÛoÊ¾˜úsáğ¾¥êÏ¬\$!3ë¯‚†¨“sŞè#†?õ\0\"³¬üè×³¼ûû< «\0’š9ãõ3±#İ)@v?È\nïx?Hcïhë\0ªjD0)ôùjOè×¾<ûÛİ`#¾0%(0£üôù°3\0°ùÓû ,@„ãçÀ,‰Kô\n¯ÊÀ®ûÛñ‰@„šT\0)€©Ä¬èÀ€ó:¬ë¤²ûÜCõ\0«@5@òû *Ğ=ÀDIAø	 À‡[ñ@+\$òLª=Üû@\0Ìø\"Eûş@ ÂAO\$I5#Dò;\0'£´äo˜€¤÷Pü°^€VıÓõ/è\0ø@bB(í@Nø(üÌâ\0ô\rĞf¿JÎ;¯¼@OàA†{8(ã\0—Z4Pn¤\"œppìıä\r€AV@\\£ÿ\0@0t¬ú´À\"ÁpÈşy?Ô?\$ó?´(ÑAŠütÏ±½{ç)£D?ZC£ÿîşÀ\"A¸ÿØ\ntÁÖ@cE°wA`\$\"¶½ÖÑ¬#°J¾üÏEP¿ükñãôÙ\0<€#Áë¼CøBL@tğ„ÂYLäB		3ø #¿	XığƒÂi\n\" «?ğ»E`,?À|A@ˆì3ºÑ«8O‹#D?)\0\0&àÄ&Â¸“Ãô¡o#B¬Í\0”|)€%€“šAà ³šöéOÑÜøˆ*Ğl=´Ñp	ğ·>ê@T/½@•Œ/°·€VÀ\0>#tøì \0ÂíÓêÀ)´bÍì1/›ÀşĞAáz6sC0?¬(Oœ¿œdÃô\$İ¹°»ÃDĞ=ÔÑ‹:ï@\r0Ä¿tÑ‹çŸîòIPÛ€©9,å€¤øÔO…£v?È\nPÇC‚\n´ÛÂ[4\no@i#ÉÃ™X*Ãÿ³†Î,	7ïl:¨çÃA	\$;pê\0VrEp‡£v“„:lôÃ«ü\"ĞÉÁÛ|2ğãÃÇd'ğÃÕœ Ğ£>‡´=°VB3„0ô½Ğt,°ÊÃ¸Xüƒ÷C‹à*Ğ©C¥d1PÒÁµh\nGÄ ?{İpsD\n´,p²Ä7	8	/¡#DøôCğ\0ˆ¬*ğD\$ñ¬D°ÕC?ÌQ€‚÷TEPGD>ıÔF±D!	ëøñ€®“È	ÈÜ\0Hşï~¾Œ?ºO\0)Cv?ìEÑ\$BƒdFcû?>‘,ôÄ;\ncóé,€øÔq)£Eãø#E‹çOm>äà\nà\$BÖüŠ5­€˜@r5¡ª?œÑ¤KiÂÖ¢?¯¿?”ü«ü\0ÀwLIpaÀŒ›;ììA,,£ó\0h	¯‡ãô\0%Àw‹ö¨Ü4j?sô±H¿ˆ|JBĞûx0 ¤>*\ncë0oÂpœOĞ4ÃP\n´2ãEW8H×Ã±B4p\n3²öê;IP>´?[Ğ:Â„K¡ª#qr=q1ÅoR<CûE‡dÈ×¿Ó\r@€*€ƒ´.±dÄĞøx	o?C\0kİ¥3»P	ĞSCÎú7°¤¥0°%¾tÍüU‘@°,\"\0*\0®+İ`>=ÿ^1yÅë\nd^ğhEÂú(#ûÅüˆü1w€P“´	`*Cè*Ñ„Db \nñl?›ò;PÁtø´]€¥@ùôL\0\$ÃmdcQ?#\0ıB”ÑŒdÀ(DåÜdhöAxø°‰8\0øÂN¸\$PÿÔD!ªC“\0kî»ä ñ.Íô#ï¨£M<h‰ÆŒÍòOÂğúĞüQ£ÆöÌhğFÆœØq ÄÏÄiq)\0©ÊJñ¦éT])ÁøúÛİ !¿·>5<eãğ¾?±°^ı³İlë¤¯\r\\\"õBT\n>0cÆúĞÿĞ·AÏ\n«û°ëEe¼éÌ{E¨ëC¿:9ğ-´U ‡Å\r\$H×Å-TNÉ)Ç(t\r¿yğ	ìëF‡,fP‹Á[s:£ö\0‚Èãü’í”v‘FÏJ8É,¾4@Lw(Ü#wŒv`/¿×ğıˆãCA	SÛÀ ÄQ	CÑÙ¾3Lné½µlH0Ağ?da1rÂAè	Èãİ\nD\"ƒöE¥èı#ÿÄÜÑkİ`!Ç!œO­4føÔa\r€Œ?E ##GSß¼€¨¤)°¶€¨Ä)±™Fı\$oÀ\"Ä\nl.p¦ÅÜ?ôğ\\ÁvÎèQ\0ùPà\$\0¾übK§Æ°\n@/Çt?txñ˜HA!xCõÈO!+ãQ#>ƒõğ8AëƒÜ8Au\nòD1¼Ç5\r\\RÀÀà R€g!ü€KH	´:Àè,Í#ï‰À#4j•Q²)¾0“ËEĞ3Ãx	p¼H,x\nò\r’îş¤`0ÅÈBÎ°	€/Á€lvšA€ûñÑ%>6?T}QF€ˆ\"4QÏÇ±…İÈXøÜ…0Èşj<HÖ¤×\\Y° @_\0äÏ©¾«^ÑwFb÷¼;Q-D0ÑT±F¾“‹äQC@*’Ì`±€³˜ùÌ†ñ˜Ç†?,†ò¿4	qCH8@°ÃBQ<%PÃ¿»4–èû´ct1É=\0‰\0Ü-Çô?”mmÄÆÑhşHØ4bœƒûC`Kº8íÄ*“ED»È2Ñ¬2À Á]|n²Hû!\$w±˜‘‡pÊ´dÎ#û¿U\$¯ÔÉX“Pcû¾_'’4@,?\$ìKOôD)«åñÉ©\"ƒıG\0ü4QçÉé#€ü1¬£Ôø¬—ññÃŒù|xÄ?K(\$RƒHÑBO)+È-ìrk€¿<)ÙÇ®ÃîO4RşôŒîB×\"„GœÄó“âĞn?>ıN±RÄë\rk<ïAœKÒ(AD`\n°9ÁD”qLï¾s*2(DÓ¬©p•F#õÆh?(#ôÈC\$\"Ep¨>’?tĞ,.ÆN¸‚C4N»\0l¡O‚\$Ëm€>\$‘\$­@7¤H`c 9‰(¯„­ \\¬­2¼©\\×¼­A„¬à˜!§ÿ‚@Ú@[ÂF’Ä^xc êƒj3€»ARèZ'ÿ†`â\rß \\\ryd 2\nâÿá<¸£+0#Á<7Q-˜ <·¡, >¡-KÁ@<ËTµ²³\0ÜËaªËdÈH’µ\$JSâ€ù+°\r ºËk-ä¸\0ºËr’àòá‰<@sRß ©fáµ\nëh\"ò×6ÖÈ“ÀØäbD€<€ÎD·êÉ‚¤Œ‚Á 6ËÄåL»ró/\r’ïKÁ.£¥ÎM±#ĞjïFz”gà/ÂşD]\" €Ş O€óXş“„p`)€­ä¨‘5Fù\rB#üÁÂşàşÑı\$:xüp	ƒ\nkã²L 	¡ª3‘TsP\$€VıàÉpüŒÄi+ÂItÅ0@ÅĞDÅ³Å1@[Ğ-@¹„Æ³Ã‘1K8CüLE(ÌÆÓ@I\"¼ €‘2Ä“LNËŞ|¤òûÜ¡X3€9… 7…¢rÑ˜­ì\"2€)‚è¯„Ì*W8™,ˆ8!ƒ\nÌ 3LÆ\$ÍáÀ†¨9,C<:Y+èJÅ­Ú],ÏoÌôK+dB‚ lYÍ ä74+ká+\0î%S¦`>î°I3Af™:¨ğ]4ª`/“pŒÒ®€ø2²®°IğÀ‹‰<;P“À×,3ÒD¦{€¾\rxÎ\r·„ó.Y¢Oo,Ñág<\$ Å!;Í(‰´³@ë,6KS=[.âòğ%Ìf+kÀ á›\rğÍ˜´Ú[Í 0˜SÄç­§5Û@Ö\"ŞHÅ%›²f)*›¢ì—|ÜÆËs4ÑvÁOÍtà³TW5Ş†¨mÔLæI}‚Ş:`c †‚²nø+2 …iÍ© ¤ßÓB¬P`È‚\rlËÁ=M\rDÒ©…š\$ğc¯\0K–<ˆ/\0HaÑ\"­Ë¹5©@%×²%R¹2Í7²\rafå\rÎc+ˆ\"?…?8kÍÀ‰v) Î,û¦l/šÑÍ¡/Ë8£|³òÎ8€Şúî †gÄ³¢÷:,éÁòK;-s… <¥:¸gêõƒ²Dë€3:H\\ì2Ó8¸\"í‘M*š˜`@0µ=;Y& Õ€Ò\0¬\0>'5|ÓÃ9„¾\$ñîÓ¬Ë~8ø63YÍx¬î¨›Á†S˜\"l Ç³¯-ùs€4N¶Pàà¶7|,éòÍNé2ó¦\0ø2š¸Ë¢Z³A¡\0ÆhÊ²Ï†Ã=Dí£‡É,à|“Õ5=,ä³î(Ï<âŒ´C>Ops}Ó¨Ov–4öâ°Nğ—ÒÒOY=0Sã*Î²%P%S_OH%TîOCÏ-ì`>NÇ;ôìaŸÎÌ“íÏºÜDìrÔLÕ:\n¸àÂˆP8Ì›Íêâ\0Taª9à°`‹aÌægÛÎ—l	ŸaÏí8y/JÂŸa5³Gv2²CÏôçÅ\0§9îY´ş´\0Ú  >\$HL»#Í@©Ü³Ò•ÆY¹\\r‹?èOSèPİDÿÀØÍ 4ıÎ{88ì†,M( £ä±9à3µÒù<%4@‹î~ˆS:ˆ„£ƒÍ:\"á3­‰T£oA+Pvì\0Çëa–nîğ2è„ëX ³Ñ<şı\n3îP«-S|2úK6ÃÒ²s»MŠ´ì€Øø	Pc´1'´	U	¡)Í^XÃ40LÂ1}\n/ĞÜ\$£¸…Gp!9™‹¥1ø7kƒØ`hO:2œY¸8!CÍàL¬³@:Ñ¸Îs›:ù3˜ÁPÏŞbæIÎ7D˜Ïã.Åa+2ş\\è8Ó»:#CäĞóÅÎÿ6à“ÒÑRÔÙ¦|È¸Ï€øQ\\_ªXÓs<ím×¸Ù´nø„w9Ø¹ 9Ëb8à5½¯9ãA\0Ø7ø\ra\"ƒ\nh[j¾ıFÜÁ)”ï+¨¯ÓĞIF£m“i:±-ø[n*°\rM?‚@Ê\0•Tj\0`c´iM`°@“‹2ÿF¼»\0002Ñ´%Uª8Q¿G&“æQÎgdúÁ²ÑÙ?p¡ OE:\0004,pp 3\n>ç±˜´|ÏLfà<ĞHm!ô_†¨]p;ÄP¯jD şP¼ë·\nK–nt³I\0ˆ¸ïõ\rá§-pJc¦7P3„Ô2×-Ï.ºÁ 3ÌôŸÅ'URq+ŠŞ´œPŞ–İ\rá,O,Ò‰Ó´O.•(”|¼î–Øc©üRœj[sFş`µrøNµ, .²ø7~£¦Òù:Èl·.›RÇ.86³Ë|\n--)©ËrİD¼”µQ•K„½´¹,IÅ.ÒîRëKt·À1\0ÉK 4¼Òü½/`•ÒÊê•,I©Ñ‹-å,ÔÅQ.È‹ô±Ó-û•4ÉSKƒm”ËK‰L%04ÇKyKÅ3Ô½S:	]2t¿SLÔ­@2S9ME+Rù+Í/½tKÔå64¢Sg/®²ñS9.øc´¡Sv^€0®ÀKêOy}Œ·ÍJ%3ï 4Ú3R/i´|#¸i«¹è	C¤Ü¢\\ìİŠJKxí‚î	 #Šö—vhİ‡}LËNÔó+n¢,8BÔ;\$HôS4ó»Hbb­Ï7`;€ğÓåNí>€•%=;mçÌ7½HŒ¿Ôş)H3¡›ÓŞëôöYF…?bTHuA2·F:e>4îL;lÔR¾Ê˜t˜TPÜĞÕ¹ìq0#Œ§ëGÅDsÖ€Ã5ybÅG\"iPEÅİ·tKÚAÖ£Ô55yîÀƒB°F“XèI¡ïQe=#4Y5\"»†CÎ€3˜†°\"ïCÔ9+-Gìs‹ÿO`Há‚ÔŠhQEVâ]DTô2€Êp6†_ÔiP\r²„š+p\$57ĞÁC€7`0Ò>7 ‰N=QûÀ!·QÄû•@8TaJöÔíRµBsAT1P%=@ÔT}Quå7`íì@3åPÕ+U4Á•FÀU	Q£ĞÕB\r¸+Ã€áE\rGõR“ˆä \"\0®ÕH‚À…ĞåTó¢5&SæİQµ#UuOã‚ 64È|Ã¯Î(œÉQøÈÃ¼­;á'Th\r ôÓI=wCME®Õ„v¸çÏ:Uø„ÍdÑ¥F#‹´L¹h*7ÔASM>uqD½£.;uF”(ÍË}D!+°”…†!€Ù.ûƒaO\nÉNè`™(¡²ö5\0»Txj€ÖX3À€™(óĞ!Õ‡\0º.U`Õ™‹XUJ´*\0á:Xn 7KÛXM?•@†7»Ä@ÍVºh«u‰VXQÅÀÂ•ÇOaNõÏEM¹3\nèĞ“.Åc\rÈ#!OÈ_æ\nƒ\\¨’Á;Î‰XÀàÌ ®ÊióÏÖ1?=Eï\0\rcéÍ}9…cy„­\0­Uô\rÈƒÍ¤K)Oå^MÆY½Tş\0ïCÍ”ˆ2¥aµƒ:YX‘†ÀøV\$LåbBö¸8ıe@‰OİSõPõ¢„CO˜µRºYT\roÀ‡Õ)\\o•+U)V´ôõÁ¸3›tü7)Yí?õÉË±YÕrM­ƒ²ª»àÂÖ1T\r%Á€…°\ròƒ[i’V%X„âÁ¥M%Xét?WF#ıbTM]uv•ƒo9µwÅV\rB½uUƒ¿]ñ’•cTë^\ru 5‚¥X£õZ×L çæNÖK6©Ä`…ÔÎ(ùÄÊäÎÈñğÇôPCA3\\€•97D#ÅAK==@uòSÅ;MO.~„ºŞ©fíÖJ½yG]A358nâVó9…y\0.ÍZ%n\rÔ]>ãÌÖ\$!LŞãG¼§Zè>S÷`¯§ØVÚ¯µ8[œÓÔ‡X•€³î8É`€5¤ÊCWx5‰\rñX•bÔ6_[¨9Oˆõ]¨¿õ\",`ã(\r¿ƒ>ãÓe\0€ÙX”ãÓ@`5`Á¸ÖæX³Ïó>ÏĞ\rÍƒ€úØ’óíˆÓ@€åbHëuƒX 3½x€.Ô;àœÀ¯Nøä%v¡!P‡`½`ÕæÎ7]@¢„“‰5]ŒJ7ŠİıbEÆWW8‚FJ68µŒ†àÖSX5v:XÒílàİsbøT,tWjpa\0ß×WXÙQß„-P·à‰W˜ÀCËjÖ\$ì‡€ÊË@‹¡P2%UW–!ƒåd«lÓ’XX5Šõİ¬Ù\r!Ö6YX“ŒŠ…=\\õ‰7!;ôÖXÙHXµe×–o_­‘å/…£aåÙw^]xN‘…›^P+Va€áeUæJY[AõÀ;Ö\$Ş-„µ†8\nY½J£X•}!NÖ7QË‰rÄW!_l²²ØÄàm³N‚PØã|VÊ\r\0ÖœK5èTĞˆ\rİ³Í-5…˜MrYùZĞI\r×œMT¤å³_c!õ ¡¡c\"	õÌPÕ3}~'Ø¯q\"UïTkªËÙN4}P3;˜ïYhˆÖ3]e¤EÆN, XÊ‚÷6ˆ¸Ã‘YP}u–‹\rcèçà­O˜+÷3x~İíõ6O¬\r¦µ+Q;`IÄlt<íd+Ï6D\rj °à0½G¥pq‚VæÅ[;`\rU2µ®šäÊ\0Ø|Å´ëT\\Ğªø<%[M5ôv¤H\nÃ¢ÖgÙ^æ`µˆc4E\\ÕÊYñ9±h5µTæ+²Á3§N§kì³ÓáZÿ,’F\nÉˆN¡óÁØIA5¬ ˆÙClY2ö°×kè~ó·PLİè#6²›Yô°îµ×+\\ÔÒ\0Ô aChÌÓ¶ÎßRğ ÓŒÔ¿,ù‘äÜÔ-+€Nó­5\rµµRĞ3A<Ò¨Ë“qm¸€¶Ü’Ï^Å|Á1Ë	m”6Ö’`…¶ö+ØsO]RE‹QETİ€†Úšô=·µ—¨LÜIuæbÛ¬MÈQ 5Œæ	Ä—Í?_+™“ÿ[ÇOkÛ¶Öó‚\$ëVHÔ2ÑuÖdÛ¶Üe&`‡‡2\r…½ÓWƒbà½Öıˆ¿oí+VşÔ5p5–ş¹\nõ¼6ş[·Uãgş¹0äm¾ÕòÙ©W³(ş”Aİ»t\$Y]A3ÆŠ\\:¸>–vŒT%U»wÜSH°<³O†p¤ëvV¸ˆJàˆ Uq•QÍ-ZókM‰¶ÑvÒÕ­ÆbÜqqøJÖM]-‰Ó_:ôpBÓ2ÔåqİU“36EnÍ¯b°¬j…£²R=RÆ}ºüGØ–w\\³T¥ÕÂ˜‡pe]M’Í/s(Zõ¿ËjÊuËC\\1[ùŞ–áÛ+(+XUQ\\3bsSÜªĞ¦ô! Z…•óYFçı¹Õ\0ÛTh#Êõº]8ıO³Ë™mû¥×*Íi4íW.ÛbïuÒöt``!éDÑÓju_LtWÁjÜ×÷R\\ µœ÷QÔ´EmN7QNa‹04UÕR]ÖvsÖÉu˜D š]Ak%T¶°Û!RM\\wW=4İÏµR–µSá9â?Ô]u˜‘­ÔĞL…,—]ÕJêaÄÕ@×u%¡@ŠTø7ÅÖwfÌó4%T¡[TÌ¤3­`Ö‚§;T¶o]Av5\n¶´8AubÕoİ­+E•ÒqTuÙ7|=n˜NõiU'wèJw×¬â n¯\nQÓwğ%‹ av DW…Ş\n	eÜV±T)vá…ê^°ØÎrÍ5Kx\n”@°²	¤²‚›Ğ(\n•bí-\\³IÛKUqÜªs%xeVK«uİæ7zÛ',¢´	M.íê&ÌxÔÀ‹óAÒA@“º7ÜrìUJ—uOyãbt]\0\$°-Œ†U‘µÿŞ-wå>7h ReÚ¶t×Âµ=öpˆô`h@:ƒ«x„ÕÔÜ/YEqµ8U)p½Ì×;¬{…Í ‡ÏUeO²ŞéZ5ííêMs5®w½Öş½N\0‰b!LÖw‰{e¬‹rİJµ»”0_W]Ìw>Ş\\D½³hUÖ\rÓÊT‚Ş/h%²·lÕU}‹WlV2&­L·¹P9zİAÁfË\\5õ—Fß\\MÍÓó­Ù£Uˆ8µ*OUj5ÂöæŒáx­ò´ø³dµäÏ6KYNä5Á—MÉ:Ôôé©M³r`%(€¾Ò}ó›¶‘s™˜µo»b£­uÂß­oN³Ôåy½[Õ^_±~ø!ö¹İoW%î¶²_×Põ)•…?RQ2åqƒY8]şw—ñDúVÁß¥~¥ÀsÛ(ñd³æ7QuıR•ö6BéR¾È\\Ş|Æ-\\¦ëõñxÏO€KĞíÍZÙ{bù¬â±Ö”[‰+-ìW/¶ÊV¥F¹™Qˆ’•–‹M{ šÛÀÅ§÷ñÔéFpwÆàÖëBkg“Oe¦Uƒ9¶¸!¤\r€˜ ™([p(äë‡ª»‘=Tæzì“Pïj‚õĞÀƒ‚È”Ë¹€ÒÔŠ¦^hk?J¨JÓ‚HqôU\r„Ò­7XÛNt!Ğd36”è½¯Œ\nİ3r\n°w@¹4BÚ\r>`Âc¹¯J3\"hf\rŒù3ƒRê#´vˆQø<4ƒ!À0`ÎÏö\r8Eáƒs@Ø9'´^¸A‘¬Ñ\"M;a‡=9í@( ÔYÎÈ¡Å„³RîÊ€^¾\nQ\0é2óSáf€ÎìØaTLÈV£ Zí¥îÈ5]„£VÊªŸ®Ù…Ú°®Ìá}†Wøáˆ26ïW6:2ğ­¥¶Ñ‡N,aÀ±£ç†Ù&}áÔÎá6E†mn:0âŠ-ÁºˆçúÒØ{:ˆğajaüæš©Nf7ŞFX‚<,8½¸@Ûµ…ÀäˆsÇ­â^ıˆN!î4b0ñêjŠ<A-jc¸:kùs¯\0âDğ®°b6ñ+X•º^%Ï\n†„İíø˜ª”	@ <âlÜ{^ÀÓó‰Ø`9\0Í‰Ş˜™ï<[ZOác†^Xám†X^a¬9vºá·†3³— 9ÂîHN¸p¹dãÀà*€‡‡…u\0	@.©ÜlÊDm÷8ÚBDm»…†É-hÔµ6»u®˜,˜:Ï	<\\%Nî5ì0 R‚F@¥šˆÔ»šøQMõ X‚¸¿ÖÎ4¶)IåŒ!†aÄx¦€ö4®&Ø½KÚ8)P…ÏjÓ¤tQ‡ÂÅPıßÂn÷ˆ\nòœÉe'8ıâE,KI=@†÷ğ[Ãıcd?D˜ğÄÅ÷TR¯vE0dSQcY8øäÁ·\rÔÇ),Ê9´UÑ@Å1'4P0DÀ\n´yÈø¾Ô	Ò|Å^ÎäğğAV6ÑoãpÑPüğÈåZhìE<PòA„AQ„n˜ı>ë\\mA„ûì|0ğA… şaA£Z°ÊyËÛXŞ´g0ÄfPac¯„Bq\0d1È¯ĞÇÃîB0úÁ…\$'YAµ)l8ÿ>ËFy\rÃ;èÑ¹ÅLq %ã‹4}ñÇÁdQqsÅLtÃ÷Ç xøÆK<QÂGM’\$s’•=Ù’JK8ûÇ7’&?‚¾åù\0P¦Aõ\$	Ëä‰FJÑ^Bÿ!ŒYÅ¥NH‘d(?,YäÛDù\"I³“8YÊƒşNÍAõÆ;Çd÷ÆD¹<¾&´'ù=äY“Œ? Ë÷”p£Ç“,ğ†G”“Ì\"0ÜB~HØùå/|<pÒÂ‰Œtƒòcñ	6J¹Rd\nd\$Ù.CÁ	6L“A£	6LÙÂM“PıQÖã_¼\$À)dá”øÿ¹\rBg“´}°ˆã_\rœ'™@A	æP›e8ÿvE°“e	6QĞ	B’ùıi;B–ÑTQ¯Â¡t‡®È³ËEP¶¾5)´ÕÅï#f6sÉ T0ÓÅ.÷Kş±GÅ2Î\$‹¸á´eü›ÜI¢@r4HãÅü“ûûÙ]GÃÛÿÙpD·LğQ?ÙØ’ŸÊƒ„YZ@Ã1Ì4ë?““Ş9	åkD}ÌäÀ\r”æbOæC«˜¬«Q=5d×KfS>˜Ï—CK?™u§Şø?Sø‘£…¼ÒK/ÈæS^4(2¯7ƒ*ğSFa¼f2ş\0QÌ^‘€QdH±FÇ—ÜfÍÊ–ÑT¤íì\$Ën„R¹+¢ó/5]FT—Æ`ş¸üÊ½2¸ûâÍÜáó…Nm˜SŠPØ%Q3SŒÊİ>à\r—IBŞôä““ÏE9I\"ÿNZ	\\ÚûÏKQX>“ÒÎd3<æÓœÒ#%:Õ,¾3‚%8\$à!'\0İ86‚YOœŞsÀÂÑ'3ùt´‰!4C£—NĞ%aıÜbP\$â[03d-¹7L»slMê==s:ÊÕĞ’ÖP\0f+ÔX¨rÜÕ9Ùg¸“ÙİP@ˆÌ·±\\Şx¶ú…C6\\ÓVy^çiI€ÜË\"TéUƒ¢_4äÙÄNM«`ów³S“‘f6€äfwSO›3 \r#<O›7¦V¶Q;¼ıô/¬Şäõ×•JËq¦€ÀĞ ¤ù²ÔÏ›= Ê©ü\$Ÿ>äù¹–LçbÕ(×8fY:ˆ!ùöÎœ•i•V\0æ\"ñç9‚R\nbó·ß¡ÇNô0ö„XÈhS7`7&ØË)90É ğÜ«iÍXÀ3Nı€VeFè%9à»S„ÌÌ{µÑ\$pÅ(©†…,ÓsAË)Iè-”£Y_E€Bhï.•IVJÛ5	,DèÍbT8Ë¹+M7éúÎx¯ÖöÑÂg»„³JÙ#|Ív7]¨<ì”:\0×míxz;^péÕ˜òè£/£¥·²ÜÎs-ECú¾†A¸›c3)“·øM)FŞÿ,'GR8_~’O:Mk¤©Ä×h­Î_f“3æË·¤åcYŞå=f“”HQ%S“…ó<ë>ä­m/Q+P¶•óBĞ”°ÑïCY+Œº‚R™4-†i€ğ}ƒ>Lài`3ÍC¦9ˆtHË]¦e:fQòQfÚf\0å\"™–;RE¦Ë×—Í7°¸g”áEØ7×ÑVm5­MĞíEœôZQzó-ô]i×§–˜´°!p×Íêé	†Ödâ'Ğ}™H*4Ğ›¨	•\\u‹Y¿†|Uy‹•ÍÙM3+KVÏ3¨^¢/XĞí9¶z-R„›IpNô&ÙRµ\rHTà‘¨Ş\0ú€¹¯¨ıÚ9Ğê+UÒØÛÇ@4àWÚ¬Xµ‹EqŒ^İ˜…Å×êinĞLõXØ³ ÈYÖ«•1©~£ºjgjÆ§ƒÕ½©Î¨ZšêzÚÜz£ê‡¦Ô 	j9PÔ^p\r5¯g¢İ«eØê½R³–óM_ªæ¬w„«6ã¦jÓVö¬:·j®j’ú¶jĞ3…¯úºREŒîå †Â¢õ ×jQ;¹3SîjøÒÓ`B.ëyiÖÿ O¬<Òo8T/G°#:xë hYÍ{\n?¬V²ô*·¹AŞ²í}ë9R¶ªŒT]püÑ”÷¤¼\n‹Â”	:¬a‰ºÖ¶K­~µeš±. \0úâK£õ€×èÃj+!EZ%uDæèƒÙo¦·º”,45J¶R×·­öŒ§0e©E¸úè€×®z#†ËZg£™N»µCÍeH¦»øa„­¯¤»Ìó‹î¼•+kÑRuaÊjQ¯}F3­ë¾ÙC“¶²g£r¿U+:˜èµRšì¶'Yğ¼rëkHó6ª;\0ëH…M=zÿº×°P\"Ts®5]zç©rî¥{—}‘™èì4ÜÕÒ··J\r¥™ì?vmôTAç£±0›\rìC|•ö[l3±nÄ<Ø-±UJÛßf\r^ÄW­ìg±vÆÕ8.›NCåTå.“NcØøÑã04Ø=âÌ½AOU²~-“pÛóu×±ì©²àrŒS¡fË`ºİz)˜»0‚Y‹>Ë—4Û¿JC{4lÄ\nÈZ-ißÒEÍ[6U³vÌû(lÄT¼	8ŞÌÔJlâÇ£³-Ô³üû›@¦¤¦Ğ•R„„_fÍ»=ló²¨Çá&XI´†ÎûIÇ´¤ß×âÙB-éOF%°ÚÒ…-î\0ûSN-S]±.8\$]uT.¬ÄåzêÌ‘%ûRmg¡å}Õuß1}~g®¿\\Bë[‚3r\r\r¡µæû<P×´eı8m¶VÑ`2íMÆÑáQËbË:1ƒ3.†\$Ş±ı-&\0ìŠÁ·	ˆz4°Hƒ†“´5|Õ´O6ÁÍº„P-˜D²SØ%‹×?N½VeÑû{K*â5ÏÓ¤íeRÀ€s_mCŠå„vøÏ	i7WJèÅz˜8€=\0õhq ßUt5g×«#¸m+óğ,=&3uÒÇ¥')íR%UXiË—º1î×SE`DSÀÅÓG\\T[t<XıfIM;v÷8Ùà‰`.¸;c8^ÂV·®:MÖw•¢×æ–FÀx™•\"öN€nL¯€_Ô{ÖØŞPB‰×¿IôÒWYİWu•Zİâ¬+Êõr]akMS¹ŞœµPÄß]iÖíDçîÙTøÏ“èîÖ1HJÃÓº,Få\0äîıĞ\0>Ë—-ƒnŠ½£ˆR3€—ûÂƒé¼=»;ÅLÍ¡–ñ·¶ñ7]Ùf#Çw—×n	fæà•X\"ü»î¥:-}Sg+àß\nM[@Tÿw±€Ö„Ú‰\rñb¾ö{Ú¸™:Ş÷5{„|5ä;ÖVÀÊ¾ğ!=MÇ¤!&<¼á~¹á!=Lç€h÷M¶©uû{ÓÿØDb.W7ç3\r:€…ï¥Om{®™eÖ•x	Oíé7ĞÍİ­1qšo×S-ÜVŸœGa¡PŞ}>PCÁ!P)bõ#snÛ´E äk}°À\r\nl0!Mg¶+Óì\rÕ=`š“/R5#aTáy½ÙU;Ôàn×šÛ„aT:KÅÎĞoZtİt×mt…€{·mûT=HÓ­Õ®]¬ûGğW°fÀ>Õ9È»{apa{½µI¯› 7ôŠØí©{S˜ˆ\nŒ½\0š†Ûute;|Õ{¼´-Ú³])\0¸–\n’×p–MÅ×Z UÂ¹Q»,ZÏÂÔ»ÂV‘¢…p›³İçT/û¯ï·Ã@KüÕ]ZñaYô³H_ÃCÍÓõÁ£•_] âÜ3÷^İsí­{Ï[<\$´7?X4f.ŞÀãRMU+vce]À@xmğ83ÕØ%Û\\M;~ŒW¨¶z¶aj%©wt,ºüŸÆşWÈÜáT¦2s_\0ÏÄóbaª!€ôıçĞîŸ@Ú›Æ×·ëñuG§¶ğ6Å¿wëÜ/bÛÀÜãC>q•\\5Üb~¾ş<gÔæ1pàÒ¸ÑíQ•Á›Nè¬*Ğ%—=í+8y8&¶şi}Åç6ñÊØÁDqÑ3ğ€:ŞáMtƒ]Hs,&—ßÛT +À8ŒéÇìõ;:l×B÷Áºï ÷T/sï!6åíÓÈM¢~¹à=°Œ=œ‘Œ}E:¥\r•A{~s´¶Ù_3º÷±¨ßvo»>Ø{,cÚÌ\rI–PÚ¡A·%˜àq±ÖŒO™¨ç&×h6/U¶Ö•öíÓ²õAÓ¿ÑºUâÙÊ\rÜ¡'\\ázUİ—RU}À¹‚­r]É¥šãÍ]¸Ù@5øm•´îü²×r·q€‡²-~Óœ°qÅ»ß,›.r¹Ç€|ò¾eõ@1\0ÏX³»KòåË \"\0Œ[§sŞå¹š]Ä¿/TÛ¼\r=êóSÅRE\\¸aÔC DıÌ\\¦]€#“‹NÓs‡1áâ])hÏ¼ÉŸ1DìùœÆÍ^ß,ıbí¶mA\rNdŒn„6Æ¤•w[GÀ\0j ß™H¨G{¥”8-{¶Pñ[\\eLÍ+H_,#ÙÅO'<Vòñ´½KtOoÕÎ+ÑM„Xÿ3Û(4œq\\¿9Œ§sy¾ÕœçZá<%X¼ÎÃ¼››Zƒ¥Q7»P	zEÊ•i[Ï%}xÓö¾\n,Æ(Kƒ…­/àÌ¡n„¨xh|û4Ó;@¸8`åƒ©í\0¶Ğ\0'\$Òaªàòö°(ïÆE§€[¸@I…2yxBàÀÓ÷A'>l˜Òé¼ù44cï>ª”—?-\0004ÊĞ\0­4`âÍn­<a«D¡ÜaÌ›²F?ˆîÔKP]á'ĞSÔxW5ÑĞ^nÈàÏĞPhoRá¡…Ê„¢’â©†öOPœùŠvø[ôsçIX_á¼’hH\rÚ6İÒÉ`;	îÖàU¼àî{jİ0‘öÙŸL.0Ø¯L½5\"2×«^ı-ÖµÒëŠÍp\$·ÒÎ°­Ğ7ïÓ1C¡¯tôá_L. tüİO},‚º?Pn<==ÒkUã1ôW_Hİ)\nçÒ¦âºîÿPUã\nãğ’õc+Ò}/J\rLõ%Ñ«pXkàVØÛŸ}+†Hİ¯SãMQÕEpİ\r=—Ô·ì75Œö‡HY(…‡=ø==±‘TpFâú<“cõ\$ñR9À(FR4yJõ—\n†UĞÀe‹fYãe•\n.Q°ıå­\r)®É’	Ï|ñ—|0ÏÁ—ä71.DÏ\$P™.æÎ \n¹†?%’#èQ%GÏ4gQDdµ‘ìQØæåé˜»÷ «Jg*\0p8ö	\0LiÏâ@ı´gKÀtûı†áØsä=ˆ@·[Y£?yØ³Ş¯Úv4ÿ»èpScÜÑ®=p^HïäŠOœÆ´nÒxã»ü\\ĞÅ LpPfÇ\nìR.Ìu¾:Y'd—NOÑ¤Æı’üF‹i¥F•ÚdjĞ™CÜÑly²ƒ=½OXİ«ö•ü~1îGµ+Epg4W‚NÒ{´kÛ,¨ëÃW¼-rË Lh×E ty0H)\"„M²BT0ş±ÌÄÏtzhÜG5%†œÂ¿%ÔRÙQCs\"D]`>J@ÑT‰HÑH¥\"ÌŠ±{Iëßñ{F]ºJpi÷;ëóRI€\$¬“ßÉI%<0ÑhIeĞ|›RW¿nä[q€Ç=&BE#òeƒ%ì7VÉ“›L™ısâ÷èÑGÂ‘—¶Fğİ?½Ø|‘€æËE]ƒÊ{ ¶aĞ9Êšüˆ\"3pÒu-±S³¿¹‘çô7Ú!36ˆ\$éĞ>·’„Ñ”	¢¨Hú*˜¼slüvµÍgœŞ•³—2´·“,fİ4.k;S÷¯NÜÍÔ…Í>\$ï&ZÂìÓBw«Äf¹ûw{ÔÓîLâ<Ù|oƒªöpôhKwœH‹–lM·h‰¼RMÏ ‚’áŸçw=&YÎ“lğ@‚#ºœØ¡8£¥V–ÒìiuE5M³ä„œ\n6éèì‚ö4]_õi²gXBä×#³Ç~¾\\ûtÈh^ÓÂGäÜ4NÖ®ŒÿöÂígs5R•Ğ×²Õ°ÎÕ…jŞoç­gRHÅFğ%S°Ü•6S¾/…ó\\ÜÌµ)ĞŞÒG9“ @°ônÿÀg!{Bn.S€ZçTl@3u×ÓÇÛoCñÅ¦]t°²(ƒ7ÍrGr§NÖM¢£…\n…1gÉç\";xYk¾ññ\0úÍÉDlşüu6àƒ	&ú’·_~Î£>ÛßÍ] V²à6ëó’´jeåÈŠ^2ñ6	lÌh¹+uß˜~LÊw×˜»„…uŞ®9Ğ—ª6¥İU‚òÍE€‡7±Ì¶Õ“Ï“+s‡›-Ôï‰ÌôîßÓ?Gœ)'ù’q§Aœö¨‘‚ŸTA/´ŸØò Á‰Bë\rÏ‡QÉ‚a5Ï¡ŠLÿôUÏûIMˆf7=óğÓ¸.İ€Û…_Ö‹”Ñğà.ôŸÒ‡ıFz†oR&_€ÈrÃHÑàúÂ`•€_ÊÃ¿ØdN³J~ˆ\0€n	*5>•€nÀ \0géˆ~–\0p˜ãDúUéÊÇ €d·§–\0lÀÀú‹é˜¾™ú—é°\0úŠ±h~z¦€¨ú‹êˆ¬z¶¿§©zéĞ~¤z¶±È@ú¾È^Ÿ\0OéX€mëw¦@€l‡¦ş±úZîƒzë—©^½z]êO«àúê_®ëúÎ¿«>¥€këÇ°>·úÿë/¬^Éz\\¸>²ú·é°>¿z]ê@@z¯ëO²>¸z\\‡´^±ûì7¨…€Ä°~Èzéê¦`úÕípù~°\0gìØ\0aí¶şËzãéŸ¶~–\0oìgµ¾ázÑì¯®\0&Åî®\0úwí/²~ÍzôÏ±Ôû„¾­zõëàäúeë¿¶>¥€oê³Ş¸€`¯º²N%êØ>Ã{‹ëª¾ñzîw¨^¥úÃëÏ²Ş°z÷ï7¶\0\$2´ zíîK¿ú³îg§>™úçğ¯^®ú­ë×¹Ş¸ú×ì'µ^»zÁêß¹Àûƒíï¸ş´¦që×·>ö€qëç¥ß\0|Oêª¿{§ÄŞ®úÓìX>öúÁëÄ~á–·ÂáJ›©~é\0kğø@‚IëŸÆŞé|WíPé|ê7³>èz€ÏÆ|=ïç¥kûñÏ¦@zmòÇ§+ü›ò—¶Ş¼zÛë?°Şôúwé§¼ÀüyêßÊ€{=ë·«'ú©éï«~Ø{\rë_Ï&|=î×¦^¤{ßë×Ä?@z€­?2{îÇÌ–zùë·Í§{¯ó¬à|\rê¿·~ûzuğ×«`\0iég±Şğü{é—¬¿ûqñ¦ß8\0ií‡±Şì}5î?©¿.{ïíÿÓ^¨ü©î/Ö\0}êˆ~Æı&·Ö¾¹}këšÅ¾Â€góWÎ¾¥ú§×!üûïïÎŸ'ú‘ó_ÎÌ}¥ëçÓşø|›ïOÆ¿OzŸé·Ç:4{3ôÿ¥ş¯û1ô7³ş¡}ÑêÌÿSúúÇÔúïó—Àz½÷wÓß9ı3ñ0?!ı¹ñ‡¿Ÿz{ìWºş¡}eî7ØşÊüêïÒß—ïg±~ı«ò7ÅŸ%û…ñŞ>ã|eò¦ŸŒımêªÿ&ümñ—Çº4zƒ8—ÌŸ[|÷ñ'±ùú»ó×ş·~êÇ×Æ	ü	êïÓ±ú©ô¹^¼}×îŸÉÿX|½ê»”ş‹ôWË ı{õgĞŸû“÷× ıWì@\$¿”ú§è>óüSğÏÈß|×ò ?~ò\nÅ¿M|Åï?Õ^Ç£Sø¶?Ez‘ïŞ¿†{1û_µşØû¹ö±Ÿi}ûë7ÉŸOşKû¯·ş¦ı+ëÇ³i~ûùùŸ«>â¬[ñ±\0ıAğ¹Şù‚KëïÏ?±ı	ï?å?D|›ú ß2|ÅêïÍ©~şéìÏ¬?E|›ğ·ÒÍşYìïò¿Š\$ù¿µ~ãïğŸ?}‹ñ'» ûûG»ÿÎıÑô_ì>ı{1ø?¬&şƒò÷ÒÿIû­ïï×¾¶Gê¯©i|©ù¯®úaùgñŞÂÿ³ô'·°z«î?İÿ·ø¿­Ÿ€û_î?¾¾§ú‡îæ{yü¬¿«z«ëw·¾Øû\rıÿ®ÿüÑòö~¨ûÒşt>[æ‡õpé=¡|òöeö“üWáÏl_;=x~°ûUë›ç¨Oç¼?L\$\0‰÷ÜçüĞ_o=×}`ö«è×ø¯®ŸÙ¾nşÁê;ë‡¼­_ğ?áöğÛÚ§®ï³Şñ¿´{ôûÁúx'äï½ >’€õuş#ÚúO¢ße?b}ªû•úãã¾w_5=ç~õíCà7®oXÌ½ğ{‘\0İé«à¸ïğŸx=k€÷]ékî·¬_?R{çõÛÛ ¿ÕzØüê£ú§²ÏUõ½‹~xùuîÃñ—Ñoaß?(~èû±ô³îg»Ğ:>}ø™ñ«ë×¬ïg_”½h|æù\rîÃé‡ëoÍ )¾–€Äöíùsõ§êÚŸ¿ù´ú)ë¼'®\n`>½~øøéékôg³Î>6|¼\0Éş#×w¿/‰l?}vúÙõ«ãWù/^¤=Î{áõéÃØg¦°,N½ìövæçÕï©_½ç€Óéë;ŞÎoM @s{ ıì²ïŞÇ¿|Ğ÷IöSæçÚ@I_cÀ\\|æù	ö»Ş\r/_~ı~¬÷J‹Ú‡çïx`F¾–|æôÒ+òÈ\r¯¼Ÿ?¿zíÎ³ÓÈ	ï¼ÇÀ€2ıJûİÇó@Ş²À\"}üé«÷÷ÈÏx`2=p{î‹ñ·ï¯¿_\0@u{TôÒÚ§±ğH`B?ú€Á)ùdâïO_·=5~ø¢“íˆĞü=…€õéé´¨\rÚ=eøÁøP7ıÏØ_â>t{<õQõ4¶ÏcŸD=~}zôÕôCí÷úï´À	4ö©ğóäµÏNßñ?{júíê§Ë0Ÿğ¾‚˜üúä&íà€À_|töÄá[F„âOR_Ù@2HøÄ—ëüGÈO°_f@\r}÷ÍüìWäĞ\"`·=Ñ|šü¸	,—İèŸ’ı~övCäg×_`\\½;|r3áñ;×ÇùÀ¥ Ì=m{0ùÍó”ˆÏ³ pÁ›} ùÊˆHğ0 À€kyñ#Úâ¯®À’À~¹İğkå¸\r/ñ_m=á€Šõİñ£û§¼/ºªA|˜Kõõ{ŞxoLŸ-¿ÿzÒûI÷„Gé¯Ü¦ÁÒ{”õ…ì,×é°' ^=ìƒSEíSé˜U`m?X€ôö&{íØ:V]¾/€Äô¶ŒGé°Jş¾JMõû£Û—ÓÏßŞß=»Ìöåê«ãÓ¯û¸¿ôá-ğkåxOô<½qƒA\rì,¨ğ^İ¾|n÷ÁëœX;õ_O¿)Jÿñşä‡ÇÏzß‡=ş}´ûŒ'¹OX‘½°{Ò÷ıcıÈ1RŸa¾ÇznêÄö˜Ëó2¯Q·ğ#œ|TöÒÄHÈ³Cûà?JÍ	0Ğ~\0	Çîx2ôF+	5K­Ä\$•ÒxrFu	9ÖâFdW©!+ÂQEh‚üKÂ˜K@U“*¢ğuüÍ)‚VT}Øğ¢Çv˜ÍJ,°nß«:ı„Ô{uJdÃ(:]x;)cÈ\nÂ4't ¡>ºò„şëõ“4j€R\0èLKZ­íÀ\"OH¤‘x\"(EL\0­×\$¦j'îÒ:&KEBbhí1t§Ü\0dn}Á|*„wˆil ¨„Ê~Iz\n`QF£I¡	m\n0T­úŸÅ\0‡\ná¹ö;Ğ•¡a2@>àìˆP¨x!CÂÅ%P~ì’ÊQ§a	fÃ‚BÔğÎ³ˆ€¢}!l´9)è?IúVR'äRÇ¥sR¸rl.c¡ú!u#ËCí%c4gZøápBKFpŠø+±Ä'ÇÏĞ¢o?\"{­D/£øàÕ	C>-	­•&Ø`‰=\$8=´­1™'fZı¡‰\0C…bª<6ZpÅ… fÆ‚A–È÷5­»WÍä\nø£·\$Ä)tÀµrb’@j‡Ç‘@±ö†™9D33FàaO†’†f1› „Æ\0Õ»¢¨°İ¸”­µ‘t’Dì¹dXLÒ¡L¦3yLYºW0T‚çAÃ\0?6Ù\rNò.\nhPAŸŠw>\rQT\$p0°ÚOô»±¼Ëªdä€‡\0IIğÍ*b#”c(YÀ!#F8˜l?\"8Sã˜a­'ßÀC.X]ì”a›Ÿ€W<–¤rZ¸T`aQ{«	i–ù,€*ğ0©%Ğ\n3E	Œ\\*ô’ğ®áZÂ¾…qu	\"FhÉ(ĞT&(@(Fì•BD	ˆ„»¢ \0P†Àø'\$HlaV2!‡C	p,;†6¨/¡‡zƒjx~„šlÒƒô#¥‡t†ÕJ)^ŒzXòÃ‡oHˆ-ä7Ğ¥:[`RŠM£(6=L—P²úLf“I›„\r İ¡cb›ŞÓ’›èQ³fZ˜¢ùÄ-€ŸÑ²CûFxË06c\0;Ì¨Èİë‰@#%ª:î…è s\$Eh÷@! ˆ\"A1š€j‰PÑˆ +#ÒŒÔ+½4bš¯€(JŸ\nz!21 *Èa\0&\"­dJ‚A*‹­NàÕ\0,ßGŒˆ¬ıÛ\$FS áb:÷eF|—ˆM¨Äâ ú3’ t\$È‡Ì•Ù>Â¼…l%â;±FQ0¤ú ¨H8‘‘Ø\"c—\\i!‘]Ä9e‡Îáx‹(zÏŒ¡IÙ›\"ÂOèT€(\"j…~Ç(yô\$ÂñşDtv¦†%r9–;&ŒÀ!Ä\\†J\"d'8è€ÃóÄjc·ş\"R§j¡ø¢4 …O˜ÂEpÛÈöD~‡SALI&;(áë2[HIÚ¨€¨N±&ÑÄŸ\$î‹øı|F„\nñïLe©	I×b§ç‘ Ÿ¡v¦%\"4Dn\"4C …^ƒèÍò(DZˆ0ÙCÄhL{•TK&Q11Ó!–ˆ½éøä–‘3ÙŒ¡…§-˜À~„ŒÆ7BaCœ~¹F„4H.’¢!‰?jG>'øšˆbHìÄ‰±±“„F„›1<~ Úˆò|>'¢T=â=¤ïˆ…^'|%øx±:ÑÄA ƒêœ:XVğ™!àEúd÷ü\$¸eqCb»Š(È¢#C,È ÁšDhB¢Û.\$&“âŠD,Aˆ‰úRIPõ“D;ˆ{´+¨ˆ`U˜ë³u¹lD˜¦ĞÇb'C¦Š)	4ECçÑ’1¤Šv‡V\"Ü7ò(I¢0#‹Š‡âqú´`ÑSŸ\"@DF¾#lE¡~\0(eIŞ*{Ä8QDD|‰-±|V\$a¨øbª¦N…^Ê‘J<è‘€aP“Deñ>\$ÔIHJ‘?â´2œŠò|Åû4¦U1)¢P¡`@E>%\\J•bº1¯‹œ?ì?È•ñcYNDÉAQÖâè©çÕ¢^E˜‡\nº(jh˜)OâDÅ‹<ˆq2\"dè²Ñ`˜×ÄÌE:*|M%1RØ×ÄÖ‹hÊr&Ñ!X Q7äDà†1R(œñ‘\"ÅŠŸÖ.NØ¶î·]D%Bfˆ*zFèÀb=EÑ‰ëî.£ ÿ±Y¡¸Å}u¹tüt]Hi4âåÅGµV.ŒSØ¡q\"\"ôÅ…i> #­˜_p¼™aÅ¦Š¼Æ½/ÜTø£ñp\"¡yCæ.RfW©7\"”²ıŠ\0ÇÂ)ŒWÄÄÑr!#C¾Šqèø<`è¡0¯bõÂ¯cà‡\rüGøÁ¨6¢¡ Úˆ¯0Š\r¨Jq%‘‚:Ä>ÃF#<bc‘[b«‘ŸˆÜÆ®#ˆ˜qŠ½¡şŒKú+S\$X»1?b>Åİ‹/mÜH8­q!a»ÄQŒ€ˆ\$HøÈèÃO·D›‹‚™Ö\$Xø°¡øbÃÆ4BD~–%c&8±‘’Ï¾E„‰[ewÑjã1 Ú‹5YÔK¶iH0¢_E\rŒØş-#\"³Fq™b+E©‰‘Æ1ú(µÑIĞwÆ7Œ<’Ìü„gD[IPbk²Lqä[ÄÄño€#Æ‚ŠiK´\\@gÃP`ÿfdiœÑq£4Fd,Ş3ò˜ºš\"éEØ‹«’.¼V8»Gú¢îF\nŒÖë/j·q¤£6ÄJA…N\"|Fø½‘š\"2#e“]Ö\$_˜Í~ã.EıBıMÄhä0a<#> °Œ­Yv4¬bĞÇà#œÌB)‰!\0	i‘d ¦²HDúŒ;¸ÛÀ\0/¡ALøH˜ÜñgCğÖˆ}ë!8j»b„ uEÉ	\$@l+D±¼]qÆ¶\$ñ¬ è[ø\0+FEà”‘\0jGT Ğr\0M>}”ô3hSGØó~HÂğ®!áÄ\0CN…Ê\"e3ì¬c3Ÿ’6\"\rèá ØøÂÇÂÆúXM±¿%D‰#| B>0±Ò4Ææ…„•äsHŞgä‘Ê¦;KôÌ!0Ì,p	ÆyÙ.ÇBlH­PxZ1ÔbD`‰@‹‘×,3¸èŒ¨c‰ÇD¤˜Îü;hì(ĞªGŒˆ\0øğä †wP‰Ev’—ä?AúQ½Òû¥ùv 6ìvôh±°É	v…ãİ±ÿ¨é‘rÃvÃÒ+¤GxéÑà£GNŒ¶ƒ®9ÈxçqâCñ£n|dl5(òÀúÇ—L[\n*\0(ñW£ÑG>HªTVÔÅ¾@&Åo#¨Ì%8õ1“G®ÏÕ\"c³8õ‘í£Ø uvgÊ+¤zøöŒ‹äÄm#^‰~>\$P½DGk\0qÉïwvÌ‡áƒG·\0³î(j>ØöğƒÅl‡\n¾>Ô|39u£ã#7@\"—à“„s„\0QùÑ\$\"Œá	<~„„\$”âœÅ]D¦-”M8`‘ü‘ã QŒAÆ?jO¸`‘“PuÃ‡úƒÖ=€ˆÆQ–äG¦AêÈ\"@J&¹¤	 ø\\pÿbH\$à '|~óò\$k‘zD†R¢!H€‘”‘]ÆT\0 j2”kPÍ\0/ õG:¤iõ6ì—R8BÑ‰AÌƒ¤[è£bÀÇ€DY!7ùxlğÏÑ¢Á˜ˆUü„à‚\"pÃ<Ağ‰\n=dh(2µ ´ÈLh3êhí#Ó&JLPBò:”hÈ\0Â¢0Fš@Z4¨ïPí¤8ÈkŠØ‹\n*ŒÓã0ÔÏ×Æö4ºCú¨Á%ÇîêÍD)*äaH‘¤=ÃbGŒ‚ı¸Yè°€)ÈR@—!,D‰taù¼Ch\\äÅ†C`‚Ã±èã{G¦w\$˜Î9Ê&Ê¬ÒĞ\$‘T…–@ÒF«¡ø„»Å~Á0ÜnÄ{Ë¿êJé’”cô«äÀ#áEb\rPÏ:1I22D2Š¥\"…´BWsèœaÍ’I#ü*cd’5¤5ÂI‘”„²@ÈĞlÈà;#VG©Qã¤\\\0(I.ƒ®4ÌNXs§ºİØÈó\0œ”9¬9¸sÑ!ÕıJH‘¥0cò'Ã²Ç‡‹8Í)1N9 a@(4\n3\$1s°©!ù\$\"\"àLyªH`¨«¤n‰ KDÔˆ5,z`\n\0À\"1¨eÔ˜ŠI\$~ä@Õ		’LF½ÛòØx(\nĞš\"\nDå²I¼|øwH[¤CÁ#Œ(÷T;¤<„š˜°Âì’|>/”x¦Q;¡æ»ŠDäï1™“âÈœƒıFå@¶„Aš2>8ìi@‘9ÅŠ'#–EXôÁÿ‘F÷ˆÍ5,¦;D–RıEEUKQ8ï‰NŠ2íXÒÄhd»\0y<Ÿ•ŒnÈÓ2DH²%@v”A*\nDiRZ€(Ç]>\\‹JJ2	Er¤) ‚\$:Yü™x¨çQ?€U=î€ì¬7Cø±oĞH [“@„Ò=I5XÒı£Æ’Ã&´œ–4©áÿÏÍ;£‘ò‚E²%×iˆäÜŸrv™&ÖT›ˆõ©\$µ vF±&é<›Ä2c¾FÿDñlı¹ôÔI5ĞHD>DÍ ÂSù\$Ÿääõ“&İ‘DnXwdhu#Š5O<zh£RÏ‘Î\$;6:Aù;L„âÉnˆ&¢EšØôÉPáş€V7|Ğ¤˜¡°6 †d¿°8“ü:P  ’]ä¼É{\0PŸ´(*6¨§5Ş67Ç\n•U2›ÃÔ¬*rØ/™ŒŒóáĞéŸ R\$¾€¹0›yúPIçû¢Ç /B\0»Ÿ\nPˆXÀ3àbŒÕ\0.&|lĞÀ3ÒÀÇ4:<håè´¡öÎ©‹\0+ÿt”¼\$q«€AÌ0@1€d\0^	í³ÛÅ–,\0]¨x(ÀIXd16¨À¬BÍR—–Ğ/\nø\0ÒS´6Øò˜¾\0005”Ò¾SX[YL/xe7¸`sPğ¼§YN2À’€8”ôm>ScõYOò—å9\$I*S)'Çò¢ÊŠ{*2S¯¤%9J’”ĞBST¨	R°‡åJ9¨•\$\0ÚTèbùRReLJp•5*zSìªQÀeU@°•*–S´ª'¹Áè¥XJ{•dú\"Ul©UOl^çJ»JBÂU¬ªpÅï¥¥^ÊÁ•æ¢V\$¬eÒ¦ecÊÃ”Å+TL¬IRò²åSJÍ\0¿+St­	Q²±%PJÚ”Á+U\$­IV2µåTÊŞ”å+Ud®iYs€Jªƒ›+ºUü¯	Rrºƒ¾[•¦4ŞVd¨—Ër¶eqJ¶\0¾ùnVì¯ÙXR¿ßÉÊò”ı+ÒX 	]2À¥k=•_,2WÔ«9^®%„=w•‹,BTl±iYR¾%jÊ‰–,\0ÎUT±i^ò™%ŒÊœ–+&Y°Ydïj%”Ë\n–S,>Xä®7®ïã¥—Ë–I)‚Yœ²	dïÔ¥—Êü–c+úYœ°gòÀŞ—Ë–‡+ZZ,³i_2£e¢Ë:–1)‚Z,²9ir˜  J´–Ÿ)Ê´©c²£` KN–*&µ)krÕ%“KWsQZ³ykÊ¥³/€,[høÂå¯Ë\\•Ù*©êì³IaŞe­Jã–ó-z[T¶w¹ÒØ¥¿=ø–ğ÷:[Lµ9moK¥Ã½,—-Ò\\¶ç·ò»e½½¿–­-Ö[#ÖÙpï®¥ÍË„•üøÊYô¹nO­%ÍÊá—1-­íª¢Å²Ñ¥ÑK«–û+ú]\\¸	qNj%ÕË–.®]»0ÅòêåÄËc”å.®]4ºÙ\\²ÜeÕË—t|±l³	xRŞ¥â?‘—U*êXD¼™vÒµ¥äË¹—}.Ò\\D¼ùq’ô_\nËÚ—/^]Ü¹9yà¥ËË¢\nù.²^<¾yuòÀåóË²—Á)ÍêÄª©|òõ¥qËç—{/Ô	+àiMçexÊ¥—ù+ÎV¤¿ùlRÿåëKÿ—{/ş^	\"ó|²ğåKÿ—¿/ò^TÀ¦ ’Ä¥ÿL–)0`´¾é‚\0æL˜-0`´Àó%¸L\r˜-0>`\\	s\neòÌ8@öşZÔ¿És“f	¾˜W0Ö`ôÃY„\rfL2˜Jua¬·@`_D>çz[1a{Ö’ÍSßD=-:øö_ãÛ†óßcÌS8hùšb±Æç¯¦¾½˜²oÍì„Åğ7pf1\0szñ0öbìÃù…ÓÉ~Ìez±.R`ÄÁ7ÓóŸfLt˜¹1Ê`äÇ)‡3ßUÌt˜Ñ1ÊcTÂ9o“f7=™0Æ`\\³f½ì™0îdlÇù‘³ eş>C˜ÜõŞd¼ÂÙSŞ¹Ì—˜ï0½ñäÉysß`L—™%2’d¤À·ó³—Ì¬™5/ñéìÊÉ“óŞÆL¬™G1ië´ÊÉ”ó.&TÌ{11¹êìÌ	•óßÌÀ™g1i÷„Ì	–ó¤LÀ™w32eìÂòÇ3‹ÌÔ™‡0MëdÍI˜ó*LÔ™—1ûÍI™ó8&hÌW|=1”+äÎ‰}&ÎAª™Õ3l\rØI‘‡\r »Ìê™!3Ò_ÔÃI²Ë&}Lø˜PÄütÇ	„Ó@%æM™Û0^h4ÏG¾3:%Lı8Üş:fûÓ’lSC&qÍ™Ë4=í´Î‰…SCùÁMš52\"hÃ93;fM™â÷rhÔÏy¡ï_&Mš;1*i3Ó™ŠSL^øÌ×™ÚœJgCÕY§3<æ‡½»šs4UïŒÒé3fš>–™Ñ1Îj,Ò	¯M¦£Í<š:øÂj<Ò©©óP¬ÍG™ÿ3¶d4ÓGÈÓ:¡M\\™àôåé¬ÕÉ¢/¿f©Lñz›1,€ ¹|N¦vLôšÎ ö® ÓZŞàœ}û.škŒÖ§¾/[¦»=İš¹5^g¤É‰¦œ¦tL›5|›Ôé/RfÂÍezr.l,Ô)±ó`&‡Ì­šhõögDË²ób&ZÍ—šÇ2æl¼Ô¦sffÊM™‹4ÑéÜÎ‰™3j&±ÌÍ›Q5f¬ÓG³³:&lÍ²›3vm”Ö9œ3l¦É=¶›JîT”ÆXR@°š¿ÂlPiÇ½sp¥:M1a4V„Ù(oÃNLšÚqº_\$Ói¸³B&\$MÛ›46iİ¹¢2ù&ÇKä›¡.:ntÑ™¹ÓFæğÍØ—É7\n\\ÔŞ¹¸óIfö›ózÛ7êß	ºêfõË„pÁNPü#ÈÄÎÚP»Æ\\ˆë¡É%\$\\²‘Ì€S\0—2äfHÍÉY qŠ5(R#41š\$HœÂ€\\øÉôd³‡¹	wœ>}%t%±²™ÆÀ‡|Üüäf„'@ÒFÊóq’UÄMq²¢qÆšc£†4ìN©Çö!Kˆ\0‹6TŒÖNòRc.Ik_úœœ¸ÙQ¯]b2\$?¡9N5üå8¾È0£¾ Âˆgu‘ô˜Üè\">ÄD)jsòHÁacÂµÅ\"#B>æGqWY(#fˆgå-S=b;F6œúƒ°@rdy'S'¤:Œ)&itÁ%Î“9âp”QHä¨>7Nœñ8eF‚T¤ÛÄ½œJ“²qâ™ÄqE'Î&%A8¢q‰Ås'Ähœa®(¤ã9Æ³'YDÃ#ÂG&4çÉÖ‘ \$È ú@û:ê(¤<(Óh¥¢tÄEdˆì\nÉóÈèGâyF£Š)9)–O \n°\"„E\$³¾sÄuVH“•§&2{œ³;f/³(cFh±'\\Nxøƒê6\$/8©iëAIr œ^tS'E]Š™ ús¼_vS“ç}:ÜŒr{Î>„V”hé9#²¤†*ğ)ÁÓ„\"Á²‹½.Gk­Sõó¥§~‚Ş18nxª0	3§!ÿÏD\"{juê„?GşbàN¥C8†yx”sÇ§VÅÀ^g-‹/IÖsÇ§É‘BM:şqÜ\\˜wgÀ±Ew‹“9\nyû/9Ù(>çeÃ¶e~Èzrb9ÚÑD¢ø (š|^VPnÇbøEöBxÊw\$ğ–S‘ßhN£u¾È-e,Å@\$1Îø{à@löXzhN!Ÿ¡S†¦…vETô8€‰…\$d!yŒv˜ˆK´wh\nYxC‡¯=\nã¼IçÈ\$aóCå†jíò\$U3áëO@ŸQ×ŒP€1døHRfÜ™Í7òg6ãéã•Ò¦sV°dü¡)A°¦s ÏÖ}2·¤çŒç“9³Ó%?s‚’¡Lé„Ü'Í'ñ\n@áz~% Òâ'âà–¡8RZt¦ëÂ­¬kp--AŞ\$ĞSñ†ÏÊ^~uT!+ƒÈq\nÌ—\"%¨L´ÈTıb¾\0âgë)p…?Y4Lş£“õ”¦OäQw?™glıeyé¿‚Hµ¸WîÀáS9àõõÖ´õkpùQÄûùşí?C´û2¦©a™‰,dµ6’Í€bq\0O½ÀˆYÚ\"^“Ä8ğ\nJ…µŸ\nÍH.([]ÖàD.jY°. RÓó¨l5ÇU\\YĞwĞRQF\0™ª®dØ4\0èdİÍhÓ\\ìöhº£o¼\rÜ*êÀCèP9 a?è¢…óIÆ	T`šæµ;`@JXP@né@Ñ.™ÑÆ”UM¦ëŸ˜š€ä0pjŒñÀšP[kÕ>†€Š½ÔmµŒ­;LÖ¡ôJ\nf¶{ÇEšVØ1]83Ú\rí¥“·Ps †5•]8\"%mŒØh=¨(WNÑ˜€TÀQ•Ó±}KÖ–…™’¶Åqô!D2«lMn­±6Âœ4×´Dz-NKêÅœ*_YõB=‚¥õO\"½ßÓµa VhA«	g‚¬\$‡jåZ\0€Ó+	nñL£ƒœ`K\n	èW/P\\¡`VJô-ÛâĞµMØ×n‚ê¹êïhZ®â¡|`È=<9abÊÂT…¦rW<—*pÛ´!²PĞR,£å¤Z¹ê´6€6GÜ§Œ05Fô8”«=WµCNˆ6E¼ètŠ†·ÃM æ”<„2©· pĞ9¥eåM\$çİ‘¶C‰U±ÜµAEE×ım;D„ÁÏĞ5¥[Ñ¢\ntX×!Cesï@Â„¢Ø=.QW‰«Œ!ÈÑ¢7@_ #Ğ  Õ(s©Á:š±]íEA€J“PQ*\0î¡’‰jœ5ÔIU\0o¢b)ĞY\nnÉô´Lˆ°3áDÒ‰è•\n(@¤4ÚTå¦¢Å	M5Åö(‘MBÓ%}{MÓµtTAÃQ4ü+\"ƒM€è”IÅQ\\o£A¶ŠËÀ€…Jé\0€Ñ^°š˜§JêphHwP±¡ùU	âçqĞïDd:aŞô&Ó€Oí|Î(\"À™0\n²WH+ÆÔn‚Dğà'¦÷hÔŞŒC“:1ë;Z¥«£t¡ãÈÚ2îj\0006·ÑmFmVRôlã‰€¬•ì\0ÃF€mcª0(Â7˜İmš5´jv	ÄŸF4[Š2Ã]ÚvÑQfÓ®óN©şÀï¦÷ê›ÜÔòï&í'HšQÈ¡lU<0×z9*wA/‚u!G9_5Å\n/èì[Ÿ˜wµ«Ñ\$\n6TrAQº‡£°\nŒË­ãˆs¨¸Ï¬\nÎz‹ó2Äøâ*UKZ\r,ZŒù´}ÒÀCùª%–ªãZ”{ÛüG¤\n†‘ä¸dÁC*¥»¤¬Ñ - 64Yi‚;¤HU.ê@ëğR¤Gµ=M\0Õ4éĞ×o'H-ŸÌ-PŠ¡ƒœÆs @¥s·ÀÂ¨ˆˆş‰Øn5©T(jPÈ¤4š\r#S*à„(P=}G\0,ÿZ\0T’ZxOÙ¤’¬ )*Ær­ŞªQå5íIT\n,¤ÔàT–²6¸ÇCfP}%–åÆåÒbŸÃI”Àtš^Ğ@FóyF&ğ}TšjR\\,B¦’ã6²´“©0Œ‡k\$âÆ“A¬šKÔN:9ëx€ç¸ëå;²ˆ÷:t¹Ñ	¦CLÎ¯]!R‰ƒJ.R«9I`‰ÓE‚'	(À\0ìĞSàr%\0­ùL\0ôšøó*H\rÖ€GQ•é1­À\n+JB€RkÌ¸ 8’5%Æ˜’˜m¥rH4ÒAi_/Ä¥ƒJX-+3°t®)c”\0ª±Â•ø@	ç¿–Ê\0¬_â–I½Cwô´N!Íÿl”¤Ê”PEˆ¯'Rì¶ŸZ†(ğ*Æ÷Ş¨\0Æ\rQß]bìHİò¥ÙMÂ	M3+‹%M\0Õ@+T!RÀó½ôÌÊDÒú¹sØ§0");}else{header("Content-Type: image/gif");switch($_GET["file"]){case"plus.gif":echo"GIF89a\0\0\0001îîî\0\0€™™™\0\0\0!ù\0\0\0,\0\0\0\0\0\0!„©ËíMñÌ*)¾oú¯) q•¡eˆµî#ÄòLË\0;";break;case"cross.gif":echo"GIF89a\0\0\0001îîî\0\0€™™™\0\0\0!ù\0\0\0,\0\0\0\0\0\0#„©Ëí#\naÖFo~yÃ._wa”á1ç±JîGÂL×6]\0\0;";break;case"up.gif":echo"GIF89a\0\0\0001îîî\0\0€™™™\0\0\0!ù\0\0\0,\0\0\0\0\0\0 „©ËíMQN\nï}ôa8ŠyšaÅ¶®\0Çò\0;";break;case"down.gif":echo"GIF89a\0\0\0001îîî\0\0€™™™\0\0\0!ù\0\0\0,\0\0\0\0\0\0 „©ËíMñÌ*)¾[Wş\\¢ÇL&ÙœÆ¶•\0Çò\0;";break;case"arrow.gif":echo"GIF89a\0\n\0€\0\0€€€ÿÿÿ!ù\0\0\0,\0\0\0\0\0\n\0\0‚i–±‹”ªÓ²Ş»\0\0;";break;}}exit;}function
connection(){global$g;return$g;}function
adminer(){global$b;return$b;}function
idf_unescape($t){$Id=substr($t,-1);return
str_replace($Id.$Id,$Id,substr($t,1,-1));}function
escape_string($X){return
substr(q($X),1,-1);}function
remove_slashes($yf,$Fc=false){if(get_magic_quotes_gpc()){while(list($x,$X)=each($yf)){foreach($X
as$_d=>$W){unset($yf[$x][$_d]);if(is_array($W)){$yf[$x][stripslashes($_d)]=$W;$yf[]=&$yf[$x][stripslashes($_d)];}else$yf[$x][stripslashes($_d)]=($Fc?$W:stripslashes($W));}}}}function
bracket_escape($t,$La=false){static$hh=array(':'=>':1',']'=>':2','['=>':3');return
strtr($t,($La?array_flip($hh):$hh));}function
h($P){return
htmlspecialchars(str_replace("\0","",$P),ENT_QUOTES);}function
nbsp($P){return(trim($P)!=""?h($P):"&nbsp;");}function
nl_br($P){return
str_replace("\n","<br>",$P);}function
checkbox($C,$Y,$Za,$Gd="",$Fe="",$db=""){$J="<input type='checkbox' name='$C' value='".h($Y)."'".($Za?" checked":"").($Fe?' onclick="'.h($Fe).'"':'').">";return($Gd!=""||$db?"<label".($db?" class='$db'":"").">$J".h($Gd)."</label>":$J);}function
optionlist($Ke,$ig=null,$Ch=false){$J="";foreach($Ke
as$_d=>$W){$Le=array($_d=>$W);if(is_array($W)){$J.='<optgroup label="'.h($_d).'">';$Le=$W;}foreach($Le
as$x=>$X)$J.='<option'.($Ch||is_string($x)?' value="'.h($x).'"':'').(($Ch||is_string($x)?(string)$x:$X)===$ig?' selected':'').'>'.h($X);if(is_array($W))$J.='</optgroup>';}return$J;}function
html_select($C,$Ke,$Y="",$Ee=true){if($Ee)return"<select name='".h($C)."'".(is_string($Ee)?' onchange="'.h($Ee).'"':"").">".optionlist($Ke,$Y)."</select>";$J="";foreach($Ke
as$x=>$X)$J.="<label><input type='radio' name='".h($C)."' value='".h($x)."'".($x==$Y?" checked":"").">".h($X)."</label>";return$J;}function
select_input($Ha,$Ke,$Y="",$kf=""){return($Ke?"<select$Ha><option value=''>$kf".optionlist($Ke,$Y,true)."</select>":"<input$Ha size='10' value='".h($Y)."' placeholder='$kf'>");}function
confirm(){return" onclick=\"return confirm('".'Are you sure?'."');\"";}function
print_fieldset($s,$Nd,$Nh=false,$Fe=""){echo"<fieldset><legend><a href='#fieldset-$s' onclick=\"".h($Fe)."return !toggle('fieldset-$s');\">$Nd</a></legend><div id='fieldset-$s'".($Nh?"":" class='hidden'").">\n";}function
bold($Ta,$db=""){return($Ta?" class='active $db'":($db?" class='$db'":""));}function
odd($J=' class="odd"'){static$r=0;if(!$J)$r=-1;return($r++%2?$J:'');}function
js_escape($P){return
addcslashes($P,"\r\n'\\/");}function
json_row($x,$X=null){static$Gc=true;if($Gc)echo"{";if($x!=""){echo($Gc?"":",")."\n\t\"".addcslashes($x,"\r\n\"\\/").'": '.($X!==null?'"'.addcslashes($X,"\r\n\"\\/").'"':'undefined');$Gc=false;}else{echo"\n}\n";$Gc=true;}}function
ini_bool($pd){$X=ini_get($pd);return(preg_match('~^(on|true|yes)$~i',$X)||(int)$X);}function
sid(){static$J;if($J===null)$J=(SID&&!($_COOKIE&&ini_bool("session.use_cookies")));return$J;}function
q($P){global$l;return$l->quote($P);}function
get_vals($H,$e=0){global$g;$J=array();$I=$g->query($H);if(is_object($I)){while($K=$I->fetch_row())$J[]=$K[$e];}return$J;}function
get_key_vals($H,$h=null,$Xg=0){global$g;if(!is_object($h))$h=$g;$J=array();$h->timeout=$Xg;$I=$h->query($H);$h->timeout=0;if(is_object($I)){while($K=$I->fetch_row())$J[$K[0]]=$K[1];}return$J;}function
get_rows($H,$h=null,$m="<p class='error'>"){global$g;$pb=(is_object($h)?$h:$g);$J=array();$I=$pb->query($H);if(is_object($I)){while($K=$I->fetch_assoc())$J[]=$K;}elseif(!$I&&!is_object($h)&&$m&&defined("PAGE_HEADER"))echo$m.error()."\n";return$J;}function
unique_array($K,$v){foreach($v
as$u){if(preg_match("~PRIMARY|UNIQUE~",$u["type"])){$J=array();foreach($u["columns"]as$x){if(!isset($K[$x]))continue
2;$J[$x]=$K[$x];}return$J;}}}function
where($Z,$o=array()){global$w;$J=array();$Qc='(^[\w\(]+('.str_replace("_",".*",preg_quote(idf_escape("_"))).')?\)+$)';foreach((array)$Z["where"]as$x=>$X){$x=bracket_escape($x,1);$e=(preg_match($Qc,$x)?$x:idf_escape($x));$J[]=$e.(($w=="sql"&&preg_match('~^[0-9]*\\.[0-9]*$~',$X))||$w=="mssql"?" LIKE ".q(addcslashes($X,"%_\\")):" = ".unconvert_field($o[$x],q($X)));if($w=="sql"&&preg_match("~[^ -@]~",$X))$J[]="$e = ".q($X)." COLLATE utf8_bin";}foreach((array)$Z["null"]as$x)$J[]=(preg_match($Qc,$x)?$x:idf_escape($x))." IS NULL";return
implode(" AND ",$J);}function
where_check($X,$o=array()){parse_str($X,$Ya);remove_slashes(array(&$Ya));return
where($Ya,$o);}function
where_link($r,$e,$Y,$Ge="="){return"&where%5B$r%5D%5Bcol%5D=".urlencode($e)."&where%5B$r%5D%5Bop%5D=".urlencode(($Y!==null?$Ge:"IS NULL"))."&where%5B$r%5D%5Bval%5D=".urlencode($Y);}function
convert_fields($f,$o,$M=array()){$J="";foreach($f
as$x=>$X){if($M&&!in_array(idf_escape($x),$M))continue;$Ea=convert_field($o[$x]);if($Ea)$J.=", $Ea AS ".idf_escape($x);}return$J;}function
cookie($C,$Y,$Pd=2592000){global$ba;$F=array($C,(preg_match("~\n~",$Y)?"":$Y),($Pd?time()+$Pd:0),preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$ba);if(version_compare(PHP_VERSION,'5.2.0')>=0)$F[]=true;return
call_user_func_array('setcookie',$F);}function
restart_session(){if(!ini_bool("session.use_cookies"))session_start();}function
stop_session(){if(!ini_bool("session.use_cookies"))session_write_close();}function&get_session($x){return$_SESSION[$x][DRIVER][SERVER][$_GET["username"]];}function
set_session($x,$X){$_SESSION[$x][DRIVER][SERVER][$_GET["username"]]=$X;}function
auth_url($Jh,$N,$V,$k=null){global$Sb;preg_match('~([^?]*)\\??(.*)~',remove_from_uri(implode("|",array_keys($Sb))."|username|".($k!==null?"db|":"").session_name()),$B);return"$B[1]?".(sid()?SID."&":"").($Jh!="server"||$N!=""?urlencode($Jh)."=".urlencode($N)."&":"")."username=".urlencode($V).($k!=""?"&db=".urlencode($k):"").($B[2]?"&$B[2]":"");}function
is_ajax(){return($_SERVER["HTTP_X_REQUESTED_WITH"]=="XMLHttpRequest");}function
redirect($A,$ee=null){if($ee!==null){restart_session();$_SESSION["messages"][preg_replace('~^[^?]*~','',($A!==null?$A:$_SERVER["REQUEST_URI"]))][]=$ee;}if($A!==null){if($A=="")$A=".";header("Location: $A");exit;}}function
query_redirect($H,$A,$ee,$Hf=true,$sc=true,$_c=false){global$g,$m,$b;$Wg="";if($sc){$wg=microtime(true);$_c=!$g->query($H);$Wg="; -- ".format_time($wg,microtime(true));}$ug="";if($H)$ug=$b->messageQuery($H.$Wg);if($_c){$m=error().$ug;return
false;}if($Hf)redirect($A,$ee.$ug);return
true;}function
queries($H=null){global$g;static$Bf=array();if($H===null)return
implode("\n",$Bf);$wg=microtime(true);$J=$g->query($H);$Bf[]=(preg_match('~;$~',$H)?"DELIMITER ;;\n$H;\nDELIMITER ":$H)."; -- ".format_time($wg,microtime(true));return$J;}function
apply_queries($H,$S,$nc='table'){foreach($S
as$Q){if(!queries("$H ".$nc($Q)))return
false;}return
true;}function
queries_redirect($A,$ee,$Hf){return
query_redirect(queries(),$A,$ee,$Hf,false,!$Hf);}function
format_time($wg,$hc){return
sprintf('%.3f s',max(0,$hc-$wg));}function
remove_from_uri($Ye=""){return
substr(preg_replace("~(?<=[?&])($Ye".(SID?"":"|".session_name()).")=[^&]*&~",'',"$_SERVER[REQUEST_URI]&"),0,-1);}function
pagination($E,$_b){return" ".($E==$_b?$E+1:'<a href="'.h(remove_from_uri("page").($E?"&page=$E".($_GET["next"]?"&next=".urlencode($_GET["next"]):""):"")).'">'.($E+1)."</a>");}function
get_file($x,$Gb=false){$Dc=$_FILES[$x];if(!$Dc)return
null;foreach($Dc
as$x=>$X)$Dc[$x]=(array)$X;$J='';foreach($Dc["error"]as$x=>$m){if($m)return$m;$C=$Dc["name"][$x];$eh=$Dc["tmp_name"][$x];$rb=file_get_contents($Gb&&preg_match('~\\.gz$~',$C)?"compress.zlib://$eh":$eh);if($Gb){$wg=substr($rb,0,3);if(function_exists("iconv")&&preg_match("~^\xFE\xFF|^\xFF\xFE~",$wg,$Nf))$rb=iconv("utf-16","utf-8",$rb);elseif($wg=="\xEF\xBB\xBF")$rb=substr($rb,3);$J.=$rb."\n\n";}else$J.=$rb;}return$J;}function
upload_error($m){$be=($m==UPLOAD_ERR_INI_SIZE?ini_get("upload_max_filesize"):0);return($m?'Unable to upload a file.'.($be?" ".sprintf('Maximum allowed file size is %sB.',$be):""):'File does not exist.');}function
repeat_pattern($if,$y){return
str_repeat("$if{0,65535}",$y/65535)."$if{0,".($y%65535)."}";}function
is_utf8($X){return(preg_match('~~u',$X)&&!preg_match('~[\\0-\\x8\\xB\\xC\\xE-\\x1F]~',$X));}function
shorten_utf8($P,$y=80,$Cg=""){if(!preg_match("(^(".repeat_pattern("[\t\r\n -\x{FFFF}]",$y).")($)?)u",$P,$B))preg_match("(^(".repeat_pattern("[\t\r\n -~]",$y).")($)?)",$P,$B);return
h($B[1]).$Cg.(isset($B[2])?"":"<i>...</i>");}function
friendly_url($X){return
preg_replace('~[^a-z0-9_]~i','-',$X);}function
hidden_fields($yf,$id=array()){while(list($x,$X)=each($yf)){if(is_array($X)){foreach($X
as$_d=>$W)$yf[$x."[$_d]"]=$W;}elseif(!in_array($x,$id))echo'<input type="hidden" name="'.h($x).'" value="'.h($X).'">';}}function
hidden_fields_get(){echo(sid()?'<input type="hidden" name="'.session_name().'" value="'.h(session_id()).'">':''),(SERVER!==null?'<input type="hidden" name="'.DRIVER.'" value="'.h(SERVER).'">':""),'<input type="hidden" name="username" value="'.h($_GET["username"]).'">';}function
table_status1($Q,$Ac=false){$J=table_status($Q,$Ac);return($J?$J:array("Name"=>$Q));}function
column_foreign_keys($Q){global$b;$J=array();foreach($b->foreignKeys($Q)as$p){foreach($p["source"]as$X)$J[$X][]=$p;}return$J;}function
enum_input($U,$Ha,$n,$Y,$gc=null){global$b;preg_match_all("~'((?:[^']|'')*)'~",$n["length"],$Wd);$J=($gc!==null?"<label><input type='$U'$Ha value='$gc'".((is_array($Y)?in_array($gc,$Y):$Y===0)?" checked":"")."><i>".'empty'."</i></label>":"");foreach($Wd[1]as$r=>$X){$X=stripcslashes(str_replace("''","'",$X));$Za=(is_int($Y)?$Y==$r+1:(is_array($Y)?in_array($r+1,$Y):$Y===$X));$J.=" <label><input type='$U'$Ha value='".($r+1)."'".($Za?' checked':'').'>'.h($b->editVal($X,$n)).'</label>';}return$J;}function
input($n,$Y,$q){global$g,$rh,$b,$w;$C=h(bracket_escape($n["field"]));echo"<td class='function'>";if(is_array($Y)&&!$q){$Ca=array($Y);if(version_compare(PHP_VERSION,5.4)>=0)$Ca[]=JSON_PRETTY_PRINT;$Y=call_user_func_array('json_encode',$Ca);$q="json";}$Qf=($w=="mssql"&&$n["auto_increment"]);if($Qf&&!$_POST["save"])$q=null;$Rc=(isset($_GET["select"])||$Qf?array("orig"=>'original'):array())+$b->editFunctions($n);$Ha=" name='fields[$C]'";if($n["type"]=="enum")echo
nbsp($Rc[""])."<td>".$b->editInput($_GET["edit"],$n,$Ha,$Y);else{$Gc=0;foreach($Rc
as$x=>$X){if($x===""||!$X)break;$Gc++;}$Ee=($Gc?" onchange=\"var f = this.form['function[".h(js_escape(bracket_escape($n["field"])))."]']; if ($Gc > f.selectedIndex) f.selectedIndex = $Gc;\" onkeyup='keyupChange.call(this);'":"");$Ha.=$Ee;$Zc=(in_array($q,$Rc)||isset($Rc[$q]));echo(count($Rc)>1?"<select name='function[$C]' onchange='functionChange(this);'".on_help("getTarget(event).value.replace(/^SQL\$/, '')",1).">".optionlist($Rc,$q===null||$Zc?$q:"")."</select>":nbsp(reset($Rc))).'<td>';$rd=$b->editInput($_GET["edit"],$n,$Ha,$Y);if($rd!="")echo$rd;elseif($n["type"]=="set"){preg_match_all("~'((?:[^']|'')*)'~",$n["length"],$Wd);foreach($Wd[1]as$r=>$X){$X=stripcslashes(str_replace("''","'",$X));$Za=(is_int($Y)?($Y>>$r)&1:in_array($X,explode(",",$Y),true));echo" <label><input type='checkbox' name='fields[$C][$r]' value='".(1<<$r)."'".($Za?' checked':'')."$Ee>".h($b->editVal($X,$n)).'</label>';}}elseif(preg_match('~blob|bytea|raw|file~',$n["type"])&&ini_bool("file_uploads"))echo"<input type='file' name='fields-$C'$Ee>";elseif(($Ug=preg_match('~text|lob~',$n["type"]))||preg_match("~\n~",$Y)){if($Ug&&$w!="sqlite")$Ha.=" cols='50' rows='12'";else{$L=min(12,substr_count($Y,"\n")+1);$Ha.=" cols='30' rows='$L'".($L==1?" style='height: 1.2em;'":"");}echo"<textarea$Ha>".h($Y).'</textarea>';}elseif($q=="json")echo"<textarea$Ha cols='50' rows='12' class='jush-js'>".h($Y).'</textarea>';else{$de=(!preg_match('~int~',$n["type"])&&preg_match('~^(\\d+)(,(\\d+))?$~',$n["length"],$B)?((preg_match("~binary~",$n["type"])?2:1)*$B[1]+($B[3]?1:0)+($B[2]&&!$n["unsigned"]?1:0)):($rh[$n["type"]]?$rh[$n["type"]]+($n["unsigned"]?0:1):0));if($w=='sql'&&$g->server_info>=5.6&&preg_match('~time~',$n["type"]))$de+=7;echo"<input".((!$Zc||$q==="")&&preg_match('~(?<!o)int~',$n["type"])?" type='number'":"")." value='".h($Y)."'".($de?" maxlength='$de'":"").(preg_match('~char|binary~',$n["type"])&&$de>20?" size='40'":"")."$Ha>";}}}function
process_input($n){global$b;$t=bracket_escape($n["field"]);$q=$_POST["function"][$t];$Y=$_POST["fields"][$t];if($n["type"]=="enum"){if($Y==-1)return
false;if($Y=="")return"NULL";return+$Y;}if($n["auto_increment"]&&$Y=="")return
null;if($q=="orig")return($n["on_update"]=="CURRENT_TIMESTAMP"?idf_escape($n["field"]):false);if($q=="NULL")$Y=null;if($n["type"]=="set")return
array_sum((array)$Y);if($q=="json"){$q="";$Y=json_decode($Y,true);if(!is_array($Y))return
false;return$Y;}if(preg_match('~blob|bytea|raw|file~',$n["type"])&&ini_bool("file_uploads")){$Dc=get_file("fields-$t");if(!is_string($Dc))return
false;return
q($Dc);}return$b->processInput($n,$Y,$q);}function
fields_from_edit(){global$l;$J=array();foreach((array)$_POST["field_keys"]as$x=>$X){if($X!=""){$X=bracket_escape($X);$_POST["function"][$X]=$_POST["field_funs"][$x];$_POST["fields"][$X]=$_POST["field_vals"][$x];}}foreach((array)$_POST["fields"]as$x=>$X){$C=bracket_escape($x,1);$J[$C]=array("field"=>$C,"privileges"=>array("insert"=>1,"update"=>1),"null"=>1,"auto_increment"=>($x==$l->primary),);}return$J;}function
search_tables(){global$b,$g;$_GET["where"][0]["op"]="LIKE %%";$_GET["where"][0]["val"]=$_POST["query"];$Mc=false;foreach(table_status('',true)as$Q=>$R){$C=$b->tableName($R);if(isset($R["Engine"])&&$C!=""&&(!$_POST["tables"]||in_array($Q,$_POST["tables"]))){$I=$g->query("SELECT".limit("1 FROM ".table($Q)," WHERE ".implode(" AND ",$b->selectSearchProcess(fields($Q),array())),1));if(!$I||$I->fetch_row()){if(!$Mc){echo"<ul>\n";$Mc=true;}echo"<li>".($I?"<a href='".h(ME."select=".urlencode($Q)."&where[0][op]=".urlencode($_GET["where"][0]["op"])."&where[0][val]=".urlencode($_GET["where"][0]["val"]))."'>$C</a>\n":"$C: <span class='error'>".error()."</span>\n");}}}echo($Mc?"</ul>":"<p class='message'>".'No tables.')."\n";}function
dump_headers($gd,$ne=false){global$b;$J=$b->dumpHeaders($gd,$ne);$We=$_POST["output"];if($We!="text")header("Content-Disposition: attachment; filename=".$b->dumpFilename($gd).".$J".($We!="file"&&!preg_match('~[^0-9a-z]~',$We)?".$We":""));session_write_close();ob_flush();flush();return$J;}function
dump_csv($K){foreach($K
as$x=>$X){if(preg_match("~[\"\n,;\t]~",$X)||$X==="")$K[$x]='"'.str_replace('"','""',$X).'"';}echo
implode(($_POST["format"]=="csv"?",":($_POST["format"]=="tsv"?"\t":";")),$K)."\r\n";}function
apply_sql_function($q,$e){return($q?($q=="unixepoch"?"DATETIME($e, '$q')":($q=="count distinct"?"COUNT(DISTINCT ":strtoupper("$q("))."$e)"):$e);}function
password_file($xb){$Ob=ini_get("upload_tmp_dir");if(!$Ob){if(function_exists('sys_get_temp_dir'))$Ob=sys_get_temp_dir();else{$Ec=@tempnam("","");if(!$Ec)return
false;$Ob=dirname($Ec);unlink($Ec);}}$Ec="$Ob/adminer.key";$J=@file_get_contents($Ec);if($J||!$xb)return$J;$Oc=@fopen($Ec,"w");if($Oc){$J=rand_string();fwrite($Oc,$J);fclose($Oc);}return$J;}function
rand_string(){return
md5(uniqid(mt_rand(),true));}function
select_value($X,$_,$n,$Vg){global$b,$ba;if(is_array($X)){$J="";foreach($X
as$_d=>$W)$J.="<tr>".($X!=array_values($X)?"<th>".h($_d):"")."<td>".select_value($W,$_,$n,$Vg);return"<table cellspacing='0'>$J</table>";}if(!$_)$_=$b->selectLink($X,$n);if($_===null){if(is_mail($X))$_="mailto:$X";if($_f=is_url($X))$_=($_f=="http"&&$ba?$X:"$_f://www.adminer.org/redirect/?url=".urlencode($X));}$J=$b->editVal($X,$n);if($J!==null){if($J==="")$J="&nbsp;";elseif($Vg!=""&&is_shortable($n)&&is_utf8($J))$J=shorten_utf8($J,max(0,+$Vg));else$J=h($J);}return$b->selectVal($J,$_,$n,$X);}function
is_mail($dc){$Fa='[-a-z0-9!#$%&\'*+/=?^_`{|}~]';$Rb='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';$if="$Fa+(\\.$Fa+)*@($Rb?\\.)+$Rb";return
is_string($dc)&&preg_match("(^$if(,\\s*$if)*\$)i",$dc);}function
is_url($P){$Rb='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';return(preg_match("~^(https?)://($Rb?\\.)+$Rb(:\\d+)?(/.*)?(\\?.*)?(#.*)?\$~i",$P,$B)?strtolower($B[1]):"");}function
is_shortable($n){return
preg_match('~char|text|lob|geometry|point|linestring|polygon|string~',$n["type"]);}function
count_rows($Q,$Z,$ud,$Uc){global$w;$H=" FROM ".table($Q).($Z?" WHERE ".implode(" AND ",$Z):"");return($ud&&($w=="sql"||count($Uc)==1)?"SELECT COUNT(DISTINCT ".implode(", ",$Uc).")$H":"SELECT COUNT(*)".($ud?" FROM (SELECT 1$H$Vc) x":$H));}function
slow_query($H){global$b,$T;$k=$b->database();$Xg=$b->queryTimeout();if(support("kill")&&is_object($h=connect())&&($k==""||$h->select_db($k))){$Ed=$h->result("SELECT CONNECTION_ID()");echo'<script type="text/javascript">
var timeout = setTimeout(function () {
	ajax(\'',js_escape(ME),'script=kill\', function () {
	}, \'token=',$T,'&kill=',$Ed,'\');
}, ',1000*$Xg,');
</script>
';}else$h=null;ob_flush();flush();$J=@get_key_vals($H,$h,$Xg);if($h){echo"<script type='text/javascript'>clearTimeout(timeout);</script>\n";ob_flush();flush();}return
array_keys($J);}function
get_token(){$Ef=rand(1,1e6);return($Ef^$_SESSION["token"]).":$Ef";}function
verify_token(){list($T,$Ef)=explode(":",$_POST["token"]);return($Ef^$_SESSION["token"])==$T;}function
lzw_decompress($Pa){$Nb=256;$Qa=8;$fb=array();$Sf=0;$Tf=0;for($r=0;$r<strlen($Pa);$r++){$Sf=($Sf<<8)+ord($Pa[$r]);$Tf+=8;if($Tf>=$Qa){$Tf-=$Qa;$fb[]=$Sf>>$Tf;$Sf&=(1<<$Tf)-1;$Nb++;if($Nb>>$Qa)$Qa++;}}$Mb=range("\0","\xFF");$J="";foreach($fb
as$r=>$eb){$cc=$Mb[$eb];if(!isset($cc))$cc=$Rh.$Rh[0];$J.=$cc;if($r)$Mb[]=$Rh.$cc[0];$Rh=$cc;}return$J;}function
on_help($kb,$pg=0){return" onmouseover='helpMouseover(this, event, ".h($kb).", $pg);' onmouseout='helpMouseout(this, event);'";}global$b,$g,$Sb,$ac,$kc,$m,$Rc,$Wc,$ba,$qd,$w,$ca,$Hd,$De,$jf,$_g,$ad,$T,$jh,$rh,$yh,$ia;if(!$_SERVER["REQUEST_URI"])$_SERVER["REQUEST_URI"]=$_SERVER["ORIG_PATH_INFO"];if(!strpos($_SERVER["REQUEST_URI"],'?')&&$_SERVER["QUERY_STRING"]!="")$_SERVER["REQUEST_URI"].="?$_SERVER[QUERY_STRING]";$ba=$_SERVER["HTTPS"]&&strcasecmp($_SERVER["HTTPS"],"off");@ini_set("session.use_trans_sid",false);session_cache_limiter("");if(!defined("SID")){session_name("adminer_sid");$F=array(0,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$ba);if(version_compare(PHP_VERSION,'5.2.0')>=0)$F[]=true;call_user_func_array('session_set_cookie_params',$F);session_start();}remove_slashes(array(&$_GET,&$_POST,&$_COOKIE),$Fc);if(get_magic_quotes_runtime())set_magic_quotes_runtime(false);@set_time_limit(0);@ini_set("zend.ze1_compatibility_mode",false);@ini_set("precision",20);function
get_lang(){return'en';}function
lang($ih,$we=null){if(is_array($ih)){$mf=($we==1?0:1);$ih=$ih[$mf];}$ih=str_replace("%d","%s",$ih);$we=number_format($we,0,".",',');return
sprintf($ih,$we);}if(extension_loaded('pdo')){class
Min_PDO
extends
PDO{var$_result,$server_info,$affected_rows,$errno,$error;function
__construct(){global$b;$mf=array_search("SQL",$b->operators);if($mf!==false)unset($b->operators[$mf]);}function
dsn($Xb,$V,$G){try{parent::__construct($Xb,$V,$G);}catch(Exception$pc){auth_error($pc);exit;}$this->setAttribute(13,array('Min_PDOStatement'));$this->server_info=$this->getAttribute(4);}function
query($H,$sh=false){$I=parent::query($H);$this->error="";if(!$I){list(,$this->errno,$this->error)=$this->errorInfo();return
false;}$this->store_result($I);return$I;}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result($I=null){if(!$I){$I=$this->_result;if(!$I)return
false;}if($I->columnCount()){$I->num_rows=$I->rowCount();return$I;}$this->affected_rows=$I->rowCount();return
true;}function
next_result(){if(!$this->_result)return
false;$this->_result->_offset=0;return@$this->_result->nextRowset();}function
result($H,$n=0){$I=$this->query($H);if(!$I)return
false;$K=$I->fetch();return$K[$n];}}class
Min_PDOStatement
extends
PDOStatement{var$_offset=0,$num_rows;function
fetch_assoc(){return$this->fetch(2);}function
fetch_row(){return$this->fetch(3);}function
fetch_field(){$K=(object)$this->getColumnMeta($this->_offset++);$K->orgtable=$K->table;$K->orgname=$K->name;$K->charsetnr=(in_array("blob",(array)$K->flags)?63:0);return$K;}}}$Sb=array();class
Min_SQL{var$_conn;function
Min_SQL($g){$this->_conn=$g;}function
quote($Y){return($Y===null?"NULL":$this->_conn->quote($Y));}function
select($Q,$M,$Z,$Uc,$Me=array(),$z=1,$E=0,$uf=false){global$b,$w;$ud=(count($Uc)<count($M));$H=$b->selectQueryBuild($M,$Z,$Uc,$Me,$z,$E);if(!$H)$H="SELECT".limit(($_GET["page"]!="last"&&+$z&&$Uc&&$ud&&$w=="sql"?"SQL_CALC_FOUND_ROWS ":"").implode(", ",$M)."\nFROM ".table($Q),($Z?"\nWHERE ".implode(" AND ",$Z):"").($Uc&&$ud?"\nGROUP BY ".implode(", ",$Uc):"").($Me?"\nORDER BY ".implode(", ",$Me):""),($z!=""?+$z:null),($E?$z*$E:0),"\n");if($uf)echo$b->selectQuery($H);return$this->_conn->query($H);}function
delete($Q,$Cf,$z=0){$H="FROM ".table($Q);return
queries("DELETE".($z?limit1($H,$Cf):" $H$Cf"));}function
update($Q,$O,$Cf,$z=0,$kg="\n"){$Hh=array();foreach($O
as$x=>$X)$Hh[]="$x = $X";$H=table($Q)." SET$kg".implode(",$kg",$Hh);return
queries("UPDATE".($z?limit1($H,$Cf):" $H$Cf"));}function
insert($Q,$O){return
queries("INSERT INTO ".table($Q).($O?" (".implode(", ",array_keys($O)).")\nVALUES (".implode(", ",$O).")":" DEFAULT VALUES"));}function
insertUpdate($Q,$L,$sf){return
false;}function
begin(){return
queries("BEGIN");}function
commit(){return
queries("COMMIT");}function
rollback(){return
queries("ROLLBACK");}}$Sb["sqlite"]="SQLite 3";$Sb["sqlite2"]="SQLite 2";if(isset($_GET["sqlite"])||isset($_GET["sqlite2"])){$pf=array((isset($_GET["sqlite"])?"SQLite3":"SQLite"),"PDO_SQLite");define("DRIVER",(isset($_GET["sqlite"])?"sqlite":"sqlite2"));if(class_exists(isset($_GET["sqlite"])?"SQLite3":"SQLiteDatabase")){if(isset($_GET["sqlite"])){class
Min_SQLite{var$extension="SQLite3",$server_info,$affected_rows,$errno,$error,$_link;function
Min_SQLite($Ec){$this->_link=new
SQLite3($Ec);$Kh=$this->_link->version();$this->server_info=$Kh["versionString"];}function
query($H){$I=@$this->_link->query($H);$this->error="";if(!$I){$this->errno=$this->_link->lastErrorCode();$this->error=$this->_link->lastErrorMsg();return
false;}elseif($I->numColumns())return
new
Min_Result($I);$this->affected_rows=$this->_link->changes();return
true;}function
quote($P){return(is_utf8($P)?"'".$this->_link->escapeString($P)."'":"x'".reset(unpack('H*',$P))."'");}function
store_result(){return$this->_result;}function
result($H,$n=0){$I=$this->query($H);if(!is_object($I))return
false;$K=$I->_result->fetchArray();return$K[$n];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($I){$this->_result=$I;}function
fetch_assoc(){return$this->_result->fetchArray(SQLITE3_ASSOC);}function
fetch_row(){return$this->_result->fetchArray(SQLITE3_NUM);}function
fetch_field(){$e=$this->_offset++;$U=$this->_result->columnType($e);return(object)array("name"=>$this->_result->columnName($e),"type"=>$U,"charsetnr"=>($U==SQLITE3_BLOB?63:0),);}function
__desctruct(){return$this->_result->finalize();}}}else{class
Min_SQLite{var$extension="SQLite",$server_info,$affected_rows,$error,$_link;function
Min_SQLite($Ec){$this->server_info=sqlite_libversion();$this->_link=new
SQLiteDatabase($Ec);}function
query($H,$sh=false){$ke=($sh?"unbufferedQuery":"query");$I=@$this->_link->$ke($H,SQLITE_BOTH,$m);$this->error="";if(!$I){$this->error=$m;return
false;}elseif($I===true){$this->affected_rows=$this->changes();return
true;}return
new
Min_Result($I);}function
quote($P){return"'".sqlite_escape_string($P)."'";}function
store_result(){return$this->_result;}function
result($H,$n=0){$I=$this->query($H);if(!is_object($I))return
false;$K=$I->_result->fetch();return$K[$n];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($I){$this->_result=$I;if(method_exists($I,'numRows'))$this->num_rows=$I->numRows();}function
fetch_assoc(){$K=$this->_result->fetch(SQLITE_ASSOC);if(!$K)return
false;$J=array();foreach($K
as$x=>$X)$J[($x[0]=='"'?idf_unescape($x):$x)]=$X;return$J;}function
fetch_row(){return$this->_result->fetch(SQLITE_NUM);}function
fetch_field(){$C=$this->_result->fieldName($this->_offset++);$if='(\\[.*]|"(?:[^"]|"")*"|(.+))';if(preg_match("~^($if\\.)?$if\$~",$C,$B)){$Q=($B[3]!=""?$B[3]:idf_unescape($B[2]));$C=($B[5]!=""?$B[5]:idf_unescape($B[4]));}return(object)array("name"=>$C,"orgname"=>$C,"orgtable"=>$Q,);}}}}elseif(extension_loaded("pdo_sqlite")){class
Min_SQLite
extends
Min_PDO{var$extension="PDO_SQLite";function
Min_SQLite($Ec){$this->dsn(DRIVER.":$Ec","","");}}}if(class_exists("Min_SQLite")){class
Min_DB
extends
Min_SQLite{function
Min_DB(){$this->Min_SQLite(":memory:");}function
select_db($Ec){if(is_readable($Ec)&&$this->query("ATTACH ".$this->quote(preg_match("~(^[/\\\\]|:)~",$Ec)?$Ec:dirname($_SERVER["SCRIPT_FILENAME"])."/$Ec")." AS a")){$this->Min_SQLite($Ec);return
true;}return
false;}function
multi_query($H){return$this->_result=$this->query($H);}function
next_result(){return
false;}}}class
Min_Driver
extends
Min_SQL{function
insertUpdate($Q,$L,$sf){$Hh=array();foreach($L
as$O)$Hh[]="(".implode(", ",$O).")";return
queries("REPLACE INTO ".table($Q)." (".implode(", ",array_keys(reset($L))).") VALUES\n".implode(",\n",$Hh));}}function
idf_escape($t){return'"'.str_replace('"','""',$t).'"';}function
table($t){return
idf_escape($t);}function
connect(){return
new
Min_DB;}function
get_databases(){return
array();}function
limit($H,$Z,$z,$D=0,$kg=" "){return" $H$Z".($z!==null?$kg."LIMIT $z".($D?" OFFSET $D":""):"");}function
limit1($H,$Z){global$g;return($g->result("SELECT sqlite_compileoption_used('ENABLE_UPDATE_DELETE_LIMIT')")?limit($H,$Z,1):" $H$Z");}function
db_collation($k,$ib){global$g;return$g->result("PRAGMA encoding");}function
engines(){return
array();}function
logged_user(){return
get_current_user();}function
tables_list(){return
get_key_vals("SELECT name, type FROM sqlite_master WHERE type IN ('table', 'view') ORDER BY (name = 'sqlite_sequence'), name",1);}function
count_tables($j){return
array();}function
table_status($C=""){global$g;$J=array();foreach(get_rows("SELECT name AS Name, type AS Engine FROM sqlite_master WHERE type IN ('table', 'view') ".($C!=""?"AND name = ".q($C):"ORDER BY name"))as$K){$K["Oid"]=1;$K["Auto_increment"]="";$K["Rows"]=$g->result("SELECT COUNT(*) FROM ".idf_escape($K["Name"]));$J[$K["Name"]]=$K;}foreach(get_rows("SELECT * FROM sqlite_sequence",null,"")as$K)$J[$K["name"]]["Auto_increment"]=$K["seq"];return($C!=""?$J[$C]:$J);}function
is_view($R){return$R["Engine"]=="view";}function
fk_support($R){global$g;return!$g->result("SELECT sqlite_compileoption_used('OMIT_FOREIGN_KEY')");}function
fields($Q){global$g;$J=array();$sf="";foreach(get_rows("PRAGMA table_info(".table($Q).")")as$K){$C=$K["name"];$U=strtolower($K["type"]);$Hb=$K["dflt_value"];$J[$C]=array("field"=>$C,"type"=>(preg_match('~int~i',$U)?"integer":(preg_match('~char|clob|text~i',$U)?"text":(preg_match('~blob~i',$U)?"blob":(preg_match('~real|floa|doub~i',$U)?"real":"numeric")))),"full_type"=>$U,"default"=>(preg_match("~'(.*)'~",$Hb,$B)?str_replace("''","'",$B[1]):($Hb=="NULL"?null:$Hb)),"null"=>!$K["notnull"],"privileges"=>array("select"=>1,"insert"=>1,"update"=>1),"primary"=>$K["pk"],);if($K["pk"]){if($sf!="")$J[$sf]["auto_increment"]=false;elseif(preg_match('~^integer$~i',$U))$J[$C]["auto_increment"]=true;$sf=$C;}}$ug=$g->result("SELECT sql FROM sqlite_master WHERE type = 'table' AND name = ".q($Q));preg_match_all('~(("[^"]*+")+|[a-z0-9_]+)\s+text\s+COLLATE\s+(\'[^\']+\'|\S+)~i',$ug,$Wd,PREG_SET_ORDER);foreach($Wd
as$B){$C=str_replace('""','"',preg_replace('~^"|"$~','',$B[1]));if($J[$C])$J[$C]["collation"]=trim($B[3],"'");}return$J;}function
indexes($Q,$h=null){global$g;if(!is_object($h))$h=$g;$J=array();$ug=$h->result("SELECT sql FROM sqlite_master WHERE type = 'table' AND name = ".q($Q));if(preg_match('~\bPRIMARY\s+KEY\s*\((([^)"]+|"[^"]*")++)~i',$ug,$B)){$J[""]=array("type"=>"PRIMARY","columns"=>array(),"lengths"=>array(),"descs"=>array());preg_match_all('~((("[^"]*+")+)|(\S+))(\s+(ASC|DESC))?(,\s*|$)~i',$B[1],$Wd,PREG_SET_ORDER);foreach($Wd
as$B){$J[""]["columns"][]=idf_unescape($B[2]).$B[4];$J[""]["descs"][]=(preg_match('~DESC~i',$B[5])?'1':null);}}if(!$J){foreach(fields($Q)as$C=>$n){if($n["primary"])$J[""]=array("type"=>"PRIMARY","columns"=>array($C),"lengths"=>array(),"descs"=>array(null));}}$vg=get_key_vals("SELECT name, sql FROM sqlite_master WHERE type = 'index' AND tbl_name = ".q($Q),$h);foreach(get_rows("PRAGMA index_list(".table($Q).")",$h)as$K){$C=$K["name"];if(!preg_match("~^sqlite_~",$C)){$J[$C]["type"]=($K["unique"]?"UNIQUE":"INDEX");$J[$C]["lengths"]=array();foreach(get_rows("PRAGMA index_info(".idf_escape($C).")",$h)as$ag)$J[$C]["columns"][]=$ag["name"];$J[$C]["descs"]=array();if(preg_match('~^CREATE( UNIQUE)? INDEX '.preg_quote(idf_escape($C).' ON '.idf_escape($Q),'~').' \((.*)\)$~i',$vg[$C],$Nf)){preg_match_all('/("[^"]*+")+( DESC)?/',$Nf[2],$Wd);foreach($Wd[2]as$X)$J[$C]["descs"][]=($X?'1':null);}}}return$J;}function
foreign_keys($Q){$J=array();foreach(get_rows("PRAGMA foreign_key_list(".table($Q).")")as$K){$p=&$J[$K["id"]];if(!$p)$p=$K;$p["source"][]=$K["from"];$p["target"][]=$K["to"];}return$J;}function
view($C){global$g;return
array("select"=>preg_replace('~^(?:[^`"[]+|`[^`]*`|"[^"]*")* AS\\s+~iU','',$g->result("SELECT sql FROM sqlite_master WHERE name = ".q($C))));}function
collations(){return(isset($_GET["create"])?get_vals("PRAGMA collation_list",1):array());}function
information_schema($k){return
false;}function
error(){global$g;return
h($g->error);}function
check_sqlite_name($C){global$g;$zc="db|sdb|sqlite";if(!preg_match("~^[^\\0]*\\.($zc)\$~",$C)){$g->error=sprintf('Please use one of the extensions %s.',str_replace("|",", ",$zc));return
false;}return
true;}function
create_database($k,$d){global$g;if(file_exists($k)){$g->error='File exists.';return
false;}if(!check_sqlite_name($k))return
false;try{$_=new
Min_SQLite($k);}catch(Exception$pc){$g->error=$pc->getMessage();return
false;}$_->query('PRAGMA encoding = "UTF-8"');$_->query('CREATE TABLE adminer (i)');$_->query('DROP TABLE adminer');return
true;}function
drop_databases($j){global$g;$g->Min_SQLite(":memory:");foreach($j
as$k){if(!@unlink($k)){$g->error='File exists.';return
false;}}return
true;}function
rename_database($C,$d){global$g;if(!check_sqlite_name($C))return
false;$g->Min_SQLite(":memory:");$g->error='File exists.';return@rename(DB,$C);}function
auto_increment(){return" PRIMARY KEY".(DRIVER=="sqlite"?" AUTOINCREMENT":"");}function
alter_table($Q,$C,$o,$Ic,$mb,$ic,$d,$Ja,$df){$Bh=($Q==""||$Ic);foreach($o
as$n){if($n[0]!=""||!$n[1]||$n[2]){$Bh=true;break;}}$c=array();$Ue=array();foreach($o
as$n){if($n[1]){$c[]=($Bh?$n[1]:"ADD ".implode($n[1]));if($n[0]!="")$Ue[$n[0]]=$n[1][0];}}if(!$Bh){foreach($c
as$X){if(!queries("ALTER TABLE ".table($Q)." $X"))return
false;}if($Q!=$C&&!queries("ALTER TABLE ".table($Q)." RENAME TO ".table($C)))return
false;}elseif(!recreate_table($Q,$C,$c,$Ue,$Ic))return
false;if($Ja)queries("UPDATE sqlite_sequence SET seq = $Ja WHERE name = ".q($C));return
true;}function
recreate_table($Q,$C,$o,$Ue,$Ic,$v=array()){if($Q!=""){if(!$o){foreach(fields($Q)as$x=>$n){$o[]=process_field($n,$n);$Ue[$x]=idf_escape($x);}}$tf=false;foreach($o
as$n){if($n[6])$tf=true;}$Vb=array();foreach($v
as$x=>$X){if($X[2]=="DROP"){$Vb[$X[1]]=true;unset($v[$x]);}}foreach(indexes($Q)as$Cd=>$u){$f=array();foreach($u["columns"]as$x=>$e){if(!$Ue[$e])continue
2;$f[]=$Ue[$e].($u["descs"][$x]?" DESC":"");}if(!$Vb[$Cd]){if($u["type"]!="PRIMARY"||!$tf)$v[]=array($u["type"],$Cd,$f);}}foreach($v
as$x=>$X){if($X[0]=="PRIMARY"){unset($v[$x]);$Ic[]="  PRIMARY KEY (".implode(", ",$X[2]).")";}}foreach(foreign_keys($Q)as$Cd=>$p){foreach($p["source"]as$x=>$e){if(!$Ue[$e])continue
2;$p["source"][$x]=idf_unescape($Ue[$e]);}if(!isset($Ic[" $Cd"]))$Ic[]=" ".format_foreign_key($p);}queries("BEGIN");}foreach($o
as$x=>$n)$o[$x]="  ".implode($n);$o=array_merge($o,array_filter($Ic));if(!queries("CREATE TABLE ".table($Q!=""?"adminer_$C":$C)." (\n".implode(",\n",$o)."\n)"))return
false;if($Q!=""){if($Ue&&!queries("INSERT INTO ".table("adminer_$C")." (".implode(", ",$Ue).") SELECT ".implode(", ",array_map('idf_escape',array_keys($Ue)))." FROM ".table($Q)))return
false;$oh=array();foreach(triggers($Q)as$mh=>$Yg){$kh=trigger($mh);$oh[]="CREATE TRIGGER ".idf_escape($mh)." ".implode(" ",$Yg)." ON ".table($C)."\n$kh[Statement]";}if(!queries("DROP TABLE ".table($Q)))return
false;queries("ALTER TABLE ".table("adminer_$C")." RENAME TO ".table($C));if(!alter_indexes($C,$v))return
false;foreach($oh
as$kh){if(!queries($kh))return
false;}queries("COMMIT");}return
true;}function
index_sql($Q,$U,$C,$f){return"CREATE $U ".($U!="INDEX"?"INDEX ":"").idf_escape($C!=""?$C:uniqid($Q."_"))." ON ".table($Q)." $f";}function
alter_indexes($Q,$c){foreach($c
as$sf){if($sf[0]=="PRIMARY")return
recreate_table($Q,$Q,array(),array(),array(),$c);}foreach(array_reverse($c)as$X){if(!queries($X[2]=="DROP"?"DROP INDEX ".idf_escape($X[1]):index_sql($Q,$X[0],$X[1],"(".implode(", ",$X[2]).")")))return
false;}return
true;}function
truncate_tables($S){return
apply_queries("DELETE FROM",$S);}function
drop_views($Mh){return
apply_queries("DROP VIEW",$Mh);}function
drop_tables($S){return
apply_queries("DROP TABLE",$S);}function
move_tables($S,$Mh,$Pg){return
false;}function
trigger($C){global$g;if($C=="")return
array("Statement"=>"BEGIN\n\t;\nEND");preg_match('~^CREATE\\s+TRIGGER\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*(BEFORE|AFTER|INSTEAD\\s+OF)\\s+([a-z]+)\\s+ON\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*(?:FOR\\s*EACH\\s*ROW\\s)?(.*)~is',$g->result("SELECT sql FROM sqlite_master WHERE type = 'trigger' AND name = ".q($C)),$B);return
array("Timing"=>strtoupper($B[1]),"Event"=>strtoupper($B[2]),"Trigger"=>$C,"Statement"=>$B[3]);}function
triggers($Q){$J=array();foreach(get_rows("SELECT * FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".q($Q))as$K){preg_match('~^CREATE\\s+TRIGGER\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*([a-z]+)\\s*([a-z]+)~i',$K["sql"],$B);$J[$K["name"]]=array($B[1],$B[2]);}return$J;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER","INSTEAD OF"),"Type"=>array("FOR EACH ROW"),);}function
routine($C,$U){}function
routines(){}function
routine_languages(){}function
begin(){return
queries("BEGIN");}function
last_id(){global$g;return$g->result("SELECT LAST_INSERT_ROWID()");}function
explain($g,$H){return$g->query("EXPLAIN $H");}function
found_rows($R,$Z){}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($eg){return
true;}function
create_sql($Q,$Ja){global$g;$J=$g->result("SELECT sql FROM sqlite_master WHERE type IN ('table', 'view') AND name = ".q($Q));foreach(indexes($Q)as$C=>$u){if($C=='')continue;$J.=";\n\n".index_sql($Q,$u['type'],$C,"(".implode(", ",array_map('idf_escape',$u['columns'])).")");}return$J;}function
truncate_sql($Q){return"DELETE FROM ".table($Q);}function
use_sql($Cb){}function
trigger_sql($Q,$Ag){return
implode(get_vals("SELECT sql || ';;\n' FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".q($Q)));}function
show_variables(){global$g;$J=array();foreach(array("auto_vacuum","cache_size","count_changes","default_cache_size","empty_result_callbacks","encoding","foreign_keys","full_column_names","fullfsync","journal_mode","journal_size_limit","legacy_file_format","locking_mode","page_size","max_page_count","read_uncommitted","recursive_triggers","reverse_unordered_selects","secure_delete","short_column_names","synchronous","temp_store","temp_store_directory","schema_version","integrity_check","quick_check")as$x)$J[$x]=$g->result("PRAGMA $x");return$J;}function
show_status(){$J=array();foreach(get_vals("PRAGMA compile_options")as$Je){list($x,$X)=explode("=",$Je,2);$J[$x]=$X;}return$J;}function
convert_field($n){}function
unconvert_field($n,$J){return$J;}function
support($Bc){return
preg_match('~^(columns|database|drop_col|dump|indexes|move_col|sql|status|table|trigger|variables|view|view_trigger)$~',$Bc);}$w="sqlite";$rh=array("integer"=>0,"real"=>0,"numeric"=>0,"text"=>0,"blob"=>0);$_g=array_keys($rh);$yh=array();$He=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL","SQL");$Rc=array("hex","length","lower","round","unixepoch","upper");$Wc=array("avg","count","count distinct","group_concat","max","min","sum");$ac=array(array(),array("integer|real|numeric"=>"+/-","text"=>"||",));}$Sb["pgsql"]="PostgreSQL";if(isset($_GET["pgsql"])){$pf=array("PgSQL","PDO_PgSQL");define("DRIVER","pgsql");if(extension_loaded("pgsql")){class
Min_DB{var$extension="PgSQL",$_link,$_result,$_string,$_database=true,$server_info,$affected_rows,$error;function
_error($lc,$m){if(ini_bool("html_errors"))$m=html_entity_decode(strip_tags($m));$m=preg_replace('~^[^:]*: ~','',$m);$this->error=$m;}function
connect($N,$V,$G){global$b;$k=$b->database();set_error_handler(array($this,'_error'));$this->_string="host='".str_replace(":","' port='",addcslashes($N,"'\\"))."' user='".addcslashes($V,"'\\")."' password='".addcslashes($G,"'\\")."'";$this->_link=@pg_connect("$this->_string dbname='".($k!=""?addcslashes($k,"'\\"):"postgres")."'",PGSQL_CONNECT_FORCE_NEW);if(!$this->_link&&$k!=""){$this->_database=false;$this->_link=@pg_connect("$this->_string dbname='postgres'",PGSQL_CONNECT_FORCE_NEW);}restore_error_handler();if($this->_link){$Kh=pg_version($this->_link);$this->server_info=$Kh["server"];pg_set_client_encoding($this->_link,"UTF8");}return(bool)$this->_link;}function
quote($P){return"'".pg_escape_string($this->_link,$P)."'";}function
select_db($Cb){global$b;if($Cb==$b->database())return$this->_database;$J=@pg_connect("$this->_string dbname='".addcslashes($Cb,"'\\")."'",PGSQL_CONNECT_FORCE_NEW);if($J)$this->_link=$J;return$J;}function
close(){$this->_link=@pg_connect("$this->_string dbname='postgres'");}function
query($H,$sh=false){$I=@pg_query($this->_link,$H);$this->error="";if(!$I){$this->error=pg_last_error($this->_link);return
false;}elseif(!pg_num_fields($I)){$this->affected_rows=pg_affected_rows($I);return
true;}return
new
Min_Result($I);}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($H,$n=0){$I=$this->query($H);if(!$I||!$I->num_rows)return
false;return
pg_fetch_result($I->_result,0,$n);}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($I){$this->_result=$I;$this->num_rows=pg_num_rows($I);}function
fetch_assoc(){return
pg_fetch_assoc($this->_result);}function
fetch_row(){return
pg_fetch_row($this->_result);}function
fetch_field(){$e=$this->_offset++;$J=new
stdClass;if(function_exists('pg_field_table'))$J->orgtable=pg_field_table($this->_result,$e);$J->name=pg_field_name($this->_result,$e);$J->orgname=$J->name;$J->type=pg_field_type($this->_result,$e);$J->charsetnr=($J->type=="bytea"?63:0);return$J;}function
__destruct(){pg_free_result($this->_result);}}}elseif(extension_loaded("pdo_pgsql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_PgSQL";function
connect($N,$V,$G){global$b;$k=$b->database();$P="pgsql:host='".str_replace(":","' port='",addcslashes($N,"'\\"))."' options='-c client_encoding=utf8'";$this->dsn("$P dbname='".($k!=""?addcslashes($k,"'\\"):"postgres")."'",$V,$G);return
true;}function
select_db($Cb){global$b;return($b->database()==$Cb);}function
close(){}}}class
Min_Driver
extends
Min_SQL{function
insertUpdate($Q,$L,$sf){global$g;foreach($L
as$O){$zh=array();$Z=array();foreach($O
as$x=>$X){$zh[]="$x = $X";if(isset($sf[idf_unescape($x)]))$Z[]="$x = $X";}if(!(($Z&&queries("UPDATE ".table($Q)." SET ".implode(", ",$zh)." WHERE ".implode(" AND ",$Z))&&$g->affected_rows)||queries("INSERT INTO ".table($Q)." (".implode(", ",array_keys($O)).") VALUES (".implode(", ",$O).")")))return
false;}return
true;}}function
idf_escape($t){return'"'.str_replace('"','""',$t).'"';}function
table($t){return
idf_escape($t);}function
connect(){global$b;$g=new
Min_DB;$i=$b->credentials();if($g->connect($i[0],$i[1],$i[2])){if($g->server_info>=9)$g->query("SET application_name = 'Adminer'");return$g;}return$g->error;}function
get_databases(){return
get_vals("SELECT datname FROM pg_database ORDER BY datname");}function
limit($H,$Z,$z,$D=0,$kg=" "){return" $H$Z".($z!==null?$kg."LIMIT $z".($D?" OFFSET $D":""):"");}function
limit1($H,$Z){return" $H$Z";}function
db_collation($k,$ib){global$g;return$g->result("SHOW LC_COLLATE");}function
engines(){return
array();}function
logged_user(){global$g;return$g->result("SELECT user");}function
tables_list(){return
get_key_vals("SELECT table_name, table_type FROM information_schema.tables WHERE table_schema = current_schema() ORDER BY table_name");}function
count_tables($j){return
array();}function
table_status($C=""){$J=array();foreach(get_rows("SELECT relname AS \"Name\", CASE relkind WHEN 'r' THEN 'table' ELSE 'view' END AS \"Engine\", pg_relation_size(oid) AS \"Data_length\", pg_total_relation_size(oid) - pg_relation_size(oid) AS \"Index_length\", obj_description(oid, 'pg_class') AS \"Comment\", relhasoids::int AS \"Oid\", reltuples as \"Rows\"
FROM pg_class
WHERE relkind IN ('r','v')
AND relnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema())
".($C!=""?"AND relname = ".q($C):"ORDER BY relname"))as$K)$J[$K["Name"]]=$K;return($C!=""?$J[$C]:$J);}function
is_view($R){return$R["Engine"]=="view";}function
fk_support($R){return
true;}function
fields($Q){$J=array();$Aa=array('timestamp without time zone'=>'timestamp','timestamp with time zone'=>'timestamptz',);foreach(get_rows("SELECT a.attname AS field, format_type(a.atttypid, a.atttypmod) AS full_type, d.adsrc AS default, a.attnotnull::int, col_description(c.oid, a.attnum) AS comment
FROM pg_class c
JOIN pg_namespace n ON c.relnamespace = n.oid
JOIN pg_attribute a ON c.oid = a.attrelid
LEFT JOIN pg_attrdef d ON c.oid = d.adrelid AND a.attnum = d.adnum
WHERE c.relname = ".q($Q)."
AND n.nspname = current_schema()
AND NOT a.attisdropped
AND a.attnum > 0
ORDER BY a.attnum")as$K){preg_match('~([^([]+)(\((.*)\))?((\[[0-9]*])*)$~',$K["full_type"],$B);list(,$U,$y,$K["length"],$Da)=$B;$K["length"].=$Da;$K["type"]=($Aa[$U]?$Aa[$U]:$U);$K["full_type"]=$K["type"].$y.$Da;$K["null"]=!$K["attnotnull"];$K["auto_increment"]=preg_match('~^nextval\\(~i',$K["default"]);$K["privileges"]=array("insert"=>1,"select"=>1,"update"=>1);if(preg_match('~(.+)::[^)]+(.*)~',$K["default"],$B))$K["default"]=($B[1][0]=="'"?idf_unescape($B[1]):$B[1]).$B[2];$J[$K["field"]]=$K;}return$J;}function
indexes($Q,$h=null){global$g;if(!is_object($h))$h=$g;$J=array();$Ig=$h->result("SELECT oid FROM pg_class WHERE relnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema()) AND relname = ".q($Q));$f=get_key_vals("SELECT attnum, attname FROM pg_attribute WHERE attrelid = $Ig AND attnum > 0",$h);foreach(get_rows("SELECT relname, indisunique::int, indisprimary::int, indkey, indoption FROM pg_index i, pg_class ci WHERE i.indrelid = $Ig AND ci.oid = i.indexrelid",$h)as$K){$Of=$K["relname"];$J[$Of]["type"]=($K["indisprimary"]?"PRIMARY":($K["indisunique"]?"UNIQUE":"INDEX"));$J[$Of]["columns"]=array();foreach(explode(" ",$K["indkey"])as$md)$J[$Of]["columns"][]=$f[$md];$J[$Of]["descs"]=array();foreach(explode(" ",$K["indoption"])as$nd)$J[$Of]["descs"][]=($nd&1?'1':null);$J[$Of]["lengths"]=array();}return$J;}function
foreign_keys($Q){global$De;$J=array();foreach(get_rows("SELECT conname, pg_get_constraintdef(oid) AS definition
FROM pg_constraint
WHERE conrelid = (SELECT pc.oid FROM pg_class AS pc INNER JOIN pg_namespace AS pn ON (pn.oid = pc.relnamespace) WHERE pc.relname = ".q($Q)." AND pn.nspname = current_schema())
AND contype = 'f'::char
ORDER BY conkey, conname")as$K){if(preg_match('~FOREIGN KEY\s*\((.+)\)\s*REFERENCES (.+)\((.+)\)(.*)$~iA',$K['definition'],$B)){$K['source']=array_map('trim',explode(',',$B[1]));if(preg_match('~^(("([^"]|"")+"|[^"]+)\.)?"?("([^"]|"")+"|[^"]+)$~',$B[2],$Vd)){$K['ns']=str_replace('""','"',preg_replace('~^"(.+)"$~','\1',$Vd[2]));$K['table']=str_replace('""','"',preg_replace('~^"(.+)"$~','\1',$Vd[4]));}$K['target']=array_map('trim',explode(',',$B[3]));$K['on_delete']=(preg_match("~ON DELETE ($De)~",$B[4],$Vd)?$Vd[1]:'NO ACTION');$K['on_update']=(preg_match("~ON UPDATE ($De)~",$B[4],$Vd)?$Vd[1]:'NO ACTION');$J[$K['conname']]=$K;}}return$J;}function
view($C){global$g;return
array("select"=>$g->result("SELECT pg_get_viewdef(".q($C).")"));}function
collations(){return
array();}function
information_schema($k){return($k=="information_schema");}function
error(){global$g;$J=h($g->error);if(preg_match('~^(.*\\n)?([^\\n]*)\\n( *)\\^(\\n.*)?$~s',$J,$B))$J=$B[1].preg_replace('~((?:[^&]|&[^;]*;){'.strlen($B[3]).'})(.*)~','\\1<b>\\2</b>',$B[2]).$B[4];return
nl_br($J);}function
create_database($k,$d){return
queries("CREATE DATABASE ".idf_escape($k).($d?" ENCODING ".idf_escape($d):""));}function
drop_databases($j){global$g;$g->close();return
apply_queries("DROP DATABASE",$j,'idf_escape');}function
rename_database($C,$d){return
queries("ALTER DATABASE ".idf_escape(DB)." RENAME TO ".idf_escape($C));}function
auto_increment(){return"";}function
alter_table($Q,$C,$o,$Ic,$mb,$ic,$d,$Ja,$df){$c=array();$Bf=array();foreach($o
as$n){$e=idf_escape($n[0]);$X=$n[1];if(!$X)$c[]="DROP $e";else{$Gh=$X[5];unset($X[5]);if(isset($X[6])&&$n[0]=="")$X[1]=($X[1]=="bigint"?" big":" ")."serial";if($n[0]=="")$c[]=($Q!=""?"ADD ":"  ").implode($X);else{if($e!=$X[0])$Bf[]="ALTER TABLE ".table($Q)." RENAME $e TO $X[0]";$c[]="ALTER $e TYPE$X[1]";if(!$X[6]){$c[]="ALTER $e ".($X[3]?"SET$X[3]":"DROP DEFAULT");$c[]="ALTER $e ".($X[2]==" NULL"?"DROP NOT":"SET").$X[2];}}if($n[0]!=""||$Gh!="")$Bf[]="COMMENT ON COLUMN ".table($Q).".$X[0] IS ".($Gh!=""?substr($Gh,9):"''");}}$c=array_merge($c,$Ic);if($Q=="")array_unshift($Bf,"CREATE TABLE ".table($C)." (\n".implode(",\n",$c)."\n)");elseif($c)array_unshift($Bf,"ALTER TABLE ".table($Q)."\n".implode(",\n",$c));if($Q!=""&&$Q!=$C)$Bf[]="ALTER TABLE ".table($Q)." RENAME TO ".table($C);if($Q!=""||$mb!="")$Bf[]="COMMENT ON TABLE ".table($C)." IS ".q($mb);if($Ja!=""){}foreach($Bf
as$H){if(!queries($H))return
false;}return
true;}function
alter_indexes($Q,$c){$xb=array();$Tb=array();$Bf=array();foreach($c
as$X){if($X[0]!="INDEX")$xb[]=($X[2]=="DROP"?"\nDROP CONSTRAINT ".idf_escape($X[1]):"\nADD".($X[1]!=""?" CONSTRAINT ".idf_escape($X[1]):"")." $X[0] ".($X[0]=="PRIMARY"?"KEY ":"")."(".implode(", ",$X[2]).")");elseif($X[2]=="DROP")$Tb[]=idf_escape($X[1]);else$Bf[]="CREATE INDEX ".idf_escape($X[1]!=""?$X[1]:uniqid($Q."_"))." ON ".table($Q)." (".implode(", ",$X[2]).")";}if($xb)array_unshift($Bf,"ALTER TABLE ".table($Q).implode(",",$xb));if($Tb)array_unshift($Bf,"DROP INDEX ".implode(", ",$Tb));foreach($Bf
as$H){if(!queries($H))return
false;}return
true;}function
truncate_tables($S){return
queries("TRUNCATE ".implode(", ",array_map('table',$S)));return
true;}function
drop_views($Mh){return
queries("DROP VIEW ".implode(", ",array_map('table',$Mh)));}function
drop_tables($S){return
queries("DROP TABLE ".implode(", ",array_map('table',$S)));}function
move_tables($S,$Mh,$Pg){foreach($S
as$Q){if(!queries("ALTER TABLE ".table($Q)." SET SCHEMA ".idf_escape($Pg)))return
false;}foreach($Mh
as$Q){if(!queries("ALTER VIEW ".table($Q)." SET SCHEMA ".idf_escape($Pg)))return
false;}return
true;}function
trigger($C){if($C=="")return
array("Statement"=>"EXECUTE PROCEDURE ()");$L=get_rows('SELECT trigger_name AS "Trigger", condition_timing AS "Timing", event_manipulation AS "Event", \'FOR EACH \' || action_orientation AS "Type", action_statement AS "Statement" FROM information_schema.triggers WHERE event_object_table = '.q($_GET["trigger"]).' AND trigger_name = '.q($C));return
reset($L);}function
triggers($Q){$J=array();foreach(get_rows("SELECT * FROM information_schema.triggers WHERE event_object_table = ".q($Q))as$K)$J[$K["trigger_name"]]=array($K["condition_timing"],$K["event_manipulation"]);return$J;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Type"=>array("FOR EACH ROW","FOR EACH STATEMENT"),);}function
routines(){return
get_rows('SELECT p.proname AS "ROUTINE_NAME", p.proargtypes AS "ROUTINE_TYPE", pg_catalog.format_type(p.prorettype, NULL) AS "DTD_IDENTIFIER"
FROM pg_catalog.pg_namespace n
JOIN pg_catalog.pg_proc p ON p.pronamespace = n.oid
WHERE n.nspname = current_schema()
ORDER BY p.proname');}function
routine_languages(){return
get_vals("SELECT langname FROM pg_catalog.pg_language");}function
last_id(){return
0;}function
explain($g,$H){return$g->query("EXPLAIN $H");}function
found_rows($R,$Z){global$g;if(preg_match("~ rows=([0-9]+)~",$g->result("EXPLAIN SELECT * FROM ".idf_escape($R["Name"]).($Z?" WHERE ".implode(" AND ",$Z):"")),$Nf))return$Nf[1];return
false;}function
types(){return
get_vals("SELECT typname
FROM pg_type
WHERE typnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema())
AND typtype IN ('b','d','e')
AND typelem = 0");}function
schemas(){return
get_vals("SELECT nspname FROM pg_namespace ORDER BY nspname");}function
get_schema(){global$g;return$g->result("SELECT current_schema()");}function
set_schema($dg){global$g,$rh,$_g;$J=$g->query("SET search_path TO ".idf_escape($dg));foreach(types()as$U){if(!isset($rh[$U])){$rh[$U]=0;$_g['User types'][]=$U;}}return$J;}function
use_sql($Cb){return"\connect ".idf_escape($Cb);}function
show_variables(){return
get_key_vals("SHOW ALL");}function
process_list(){global$g;return
get_rows("SELECT * FROM pg_stat_activity ORDER BY ".($g->server_info<9.2?"procpid":"pid"));}function
show_status(){}function
convert_field($n){}function
unconvert_field($n,$J){return$J;}function
support($Bc){return
preg_match('~^(database|table|columns|sql|indexes|comment|view|scheme|processlist|sequence|trigger|type|variables|drop_col)$~',$Bc);}$w="pgsql";$rh=array();$_g=array();foreach(array('Numbers'=>array("smallint"=>5,"integer"=>10,"bigint"=>19,"boolean"=>1,"numeric"=>0,"real"=>7,"double precision"=>16,"money"=>20),'Date and time'=>array("date"=>13,"time"=>17,"timestamp"=>20,"timestamptz"=>21,"interval"=>0),'Strings'=>array("character"=>0,"character varying"=>0,"text"=>0,"tsquery"=>0,"tsvector"=>0,"uuid"=>0,"xml"=>0),'Binary'=>array("bit"=>0,"bit varying"=>0,"bytea"=>0),'Network'=>array("cidr"=>43,"inet"=>43,"macaddr"=>17,"txid_snapshot"=>0),'Geometry'=>array("box"=>0,"circle"=>0,"line"=>0,"lseg"=>0,"path"=>0,"point"=>0,"polygon"=>0),)as$x=>$X){$rh+=$X;$_g[$x]=array_keys($X);}$yh=array();$He=array("=","<",">","<=",">=","!=","~","!~","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$Rc=array("char_length","lower","round","to_hex","to_timestamp","upper");$Wc=array("avg","count","count distinct","max","min","sum");$ac=array(array("char"=>"md5","date|time"=>"now",),array("int|numeric|real|money"=>"+/-","date|time"=>"+ interval/- interval","char|text"=>"||",));}$Sb["oracle"]="Oracle";if(isset($_GET["oracle"])){$pf=array("OCI8","PDO_OCI");define("DRIVER","oracle");if(extension_loaded("oci8")){class
Min_DB{var$extension="oci8",$_link,$_result,$server_info,$affected_rows,$errno,$error;function
_error($lc,$m){if(ini_bool("html_errors"))$m=html_entity_decode(strip_tags($m));$m=preg_replace('~^[^:]*: ~','',$m);$this->error=$m;}function
connect($N,$V,$G){$this->_link=@oci_new_connect($V,$G,$N,"AL32UTF8");if($this->_link){$this->server_info=oci_server_version($this->_link);return
true;}$m=oci_error();$this->error=$m["message"];return
false;}function
quote($P){return"'".str_replace("'","''",$P)."'";}function
select_db($Cb){return
true;}function
query($H,$sh=false){$I=oci_parse($this->_link,$H);$this->error="";if(!$I){$m=oci_error($this->_link);$this->errno=$m["code"];$this->error=$m["message"];return
false;}set_error_handler(array($this,'_error'));$J=@oci_execute($I);restore_error_handler();if($J){if(oci_num_fields($I))return
new
Min_Result($I);$this->affected_rows=oci_num_rows($I);}return$J;}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($H,$n=1){$I=$this->query($H);if(!is_object($I)||!oci_fetch($I->_result))return
false;return
oci_result($I->_result,$n);}}class
Min_Result{var$_result,$_offset=1,$num_rows;function
Min_Result($I){$this->_result=$I;}function
_convert($K){foreach((array)$K
as$x=>$X){if(is_a($X,'OCI-Lob'))$K[$x]=$X->load();}return$K;}function
fetch_assoc(){return$this->_convert(oci_fetch_assoc($this->_result));}function
fetch_row(){return$this->_convert(oci_fetch_row($this->_result));}function
fetch_field(){$e=$this->_offset++;$J=new
stdClass;$J->name=oci_field_name($this->_result,$e);$J->orgname=$J->name;$J->type=oci_field_type($this->_result,$e);$J->charsetnr=(preg_match("~raw|blob|bfile~",$J->type)?63:0);return$J;}function
__destruct(){oci_free_statement($this->_result);}}}elseif(extension_loaded("pdo_oci")){class
Min_DB
extends
Min_PDO{var$extension="PDO_OCI";function
connect($N,$V,$G){$this->dsn("oci:dbname=//$N;charset=AL32UTF8",$V,$G);return
true;}function
select_db($Cb){return
true;}}}class
Min_Driver
extends
Min_SQL{function
begin(){return
true;}}function
idf_escape($t){return'"'.str_replace('"','""',$t).'"';}function
table($t){return
idf_escape($t);}function
connect(){global$b;$g=new
Min_DB;$i=$b->credentials();if($g->connect($i[0],$i[1],$i[2]))return$g;return$g->error;}function
get_databases(){return
get_vals("SELECT tablespace_name FROM user_tablespaces");}function
limit($H,$Z,$z,$D=0,$kg=" "){return($D?" * FROM (SELECT t.*, rownum AS rnum FROM (SELECT $H$Z) t WHERE rownum <= ".($z+$D).") WHERE rnum > $D":($z!==null?" * FROM (SELECT $H$Z) WHERE rownum <= ".($z+$D):" $H$Z"));}function
limit1($H,$Z){return" $H$Z";}function
db_collation($k,$ib){global$g;return$g->result("SELECT value FROM nls_database_parameters WHERE parameter = 'NLS_CHARACTERSET'");}function
engines(){return
array();}function
logged_user(){global$g;return$g->result("SELECT USER FROM DUAL");}function
tables_list(){return
get_key_vals("SELECT table_name, 'table' FROM all_tables WHERE tablespace_name = ".q(DB)."
UNION SELECT view_name, 'view' FROM user_views
ORDER BY 1");}function
count_tables($j){return
array();}function
table_status($C=""){$J=array();$fg=q($C);foreach(get_rows('SELECT table_name "Name", \'table\' "Engine", avg_row_len * num_rows "Data_length", num_rows "Rows" FROM all_tables WHERE tablespace_name = '.q(DB).($C!=""?" AND table_name = $fg":"")."
UNION SELECT view_name, 'view', 0, 0 FROM user_views".($C!=""?" WHERE view_name = $fg":"")."
ORDER BY 1")as$K){if($C!="")return$K;$J[$K["Name"]]=$K;}return$J;}function
is_view($R){return$R["Engine"]=="view";}function
fk_support($R){return
true;}function
fields($Q){$J=array();foreach(get_rows("SELECT * FROM all_tab_columns WHERE table_name = ".q($Q)." ORDER BY column_id")as$K){$U=$K["DATA_TYPE"];$y="$K[DATA_PRECISION],$K[DATA_SCALE]";if($y==",")$y=$K["DATA_LENGTH"];$J[$K["COLUMN_NAME"]]=array("field"=>$K["COLUMN_NAME"],"full_type"=>$U.($y?"($y)":""),"type"=>strtolower($U),"length"=>$y,"default"=>$K["DATA_DEFAULT"],"null"=>($K["NULLABLE"]=="Y"),"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),);}return$J;}function
indexes($Q,$h=null){$J=array();foreach(get_rows("SELECT uic.*, uc.constraint_type
FROM user_ind_columns uic
LEFT JOIN user_constraints uc ON uic.index_name = uc.constraint_name AND uic.table_name = uc.table_name
WHERE uic.table_name = ".q($Q)."
ORDER BY uc.constraint_type, uic.column_position",$h)as$K){$kd=$K["INDEX_NAME"];$J[$kd]["type"]=($K["CONSTRAINT_TYPE"]=="P"?"PRIMARY":($K["CONSTRAINT_TYPE"]=="U"?"UNIQUE":"INDEX"));$J[$kd]["columns"][]=$K["COLUMN_NAME"];$J[$kd]["lengths"][]=($K["CHAR_LENGTH"]&&$K["CHAR_LENGTH"]!=$K["COLUMN_LENGTH"]?$K["CHAR_LENGTH"]:null);$J[$kd]["descs"][]=($K["DESCEND"]?'1':null);}return$J;}function
view($C){$L=get_rows('SELECT text "select" FROM user_views WHERE view_name = '.q($C));return
reset($L);}function
collations(){return
array();}function
information_schema($k){return
false;}function
error(){global$g;return
h($g->error);}function
explain($g,$H){$g->query("EXPLAIN PLAN FOR $H");return$g->query("SELECT * FROM plan_table");}function
found_rows($R,$Z){}function
alter_table($Q,$C,$o,$Ic,$mb,$ic,$d,$Ja,$df){$c=$Tb=array();foreach($o
as$n){$X=$n[1];if($X&&$n[0]!=""&&idf_escape($n[0])!=$X[0])queries("ALTER TABLE ".table($Q)." RENAME COLUMN ".idf_escape($n[0])." TO $X[0]");if($X)$c[]=($Q!=""?($n[0]!=""?"MODIFY (":"ADD ("):"  ").implode($X).($Q!=""?")":"");else$Tb[]=idf_escape($n[0]);}if($Q=="")return
queries("CREATE TABLE ".table($C)." (\n".implode(",\n",$c)."\n)");return(!$c||queries("ALTER TABLE ".table($Q)."\n".implode("\n",$c)))&&(!$Tb||queries("ALTER TABLE ".table($Q)." DROP (".implode(", ",$Tb).")"))&&($Q==$C||queries("ALTER TABLE ".table($Q)." RENAME TO ".table($C)));}function
foreign_keys($Q){return
array();}function
truncate_tables($S){return
apply_queries("TRUNCATE TABLE",$S);}function
drop_views($Mh){return
apply_queries("DROP VIEW",$Mh);}function
drop_tables($S){return
apply_queries("DROP TABLE",$S);}function
last_id(){return
0;}function
schemas(){return
get_vals("SELECT DISTINCT owner FROM dba_segments WHERE owner IN (SELECT username FROM dba_users WHERE default_tablespace NOT IN ('SYSTEM','SYSAUX'))");}function
get_schema(){global$g;return$g->result("SELECT sys_context('USERENV', 'SESSION_USER') FROM dual");}function
set_schema($eg){global$g;return$g->query("ALTER SESSION SET CURRENT_SCHEMA = ".idf_escape($eg));}function
show_variables(){return
get_key_vals('SELECT name, display_value FROM v$parameter');}function
process_list(){return
get_rows('SELECT sess.process AS "process", sess.username AS "user", sess.schemaname AS "schema", sess.status AS "status", sess.wait_class AS "wait_class", sess.seconds_in_wait AS "seconds_in_wait", sql.sql_text AS "sql_text", sess.machine AS "machine", sess.port AS "port"
FROM v$session sess LEFT OUTER JOIN v$sql sql
ON sql.sql_id = sess.sql_id
WHERE sess.type = \'USER\'
ORDER BY PROCESS
');}function
show_status(){$L=get_rows('SELECT * FROM v$instance');return
reset($L);}function
convert_field($n){}function
unconvert_field($n,$J){return$J;}function
support($Bc){return
preg_match('~^(columns|database|drop_col|indexes|processlist|scheme|sql|status|table|variables|view|view_trigger)$~',$Bc);}$w="oracle";$rh=array();$_g=array();foreach(array('Numbers'=>array("number"=>38,"binary_float"=>12,"binary_double"=>21),'Date and time'=>array("date"=>10,"timestamp"=>29,"interval year"=>12,"interval day"=>28),'Strings'=>array("char"=>2000,"varchar2"=>4000,"nchar"=>2000,"nvarchar2"=>4000,"clob"=>4294967295,"nclob"=>4294967295),'Binary'=>array("raw"=>2000,"long raw"=>2147483648,"blob"=>4294967295,"bfile"=>4294967296),)as$x=>$X){$rh+=$X;$_g[$x]=array_keys($X);}$yh=array();$He=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","SQL");$Rc=array("length","lower","round","upper");$Wc=array("avg","count","count distinct","max","min","sum");$ac=array(array("date"=>"current_date","timestamp"=>"current_timestamp",),array("number|float|double"=>"+/-","date|timestamp"=>"+ interval/- interval","char|clob"=>"||",));}$Sb["mssql"]="MS SQL";if(isset($_GET["mssql"])){$pf=array("SQLSRV","MSSQL");define("DRIVER","mssql");if(extension_loaded("sqlsrv")){class
Min_DB{var$extension="sqlsrv",$_link,$_result,$server_info,$affected_rows,$errno,$error;function
_get_error(){$this->error="";foreach(sqlsrv_errors()as$m){$this->errno=$m["code"];$this->error.="$m[message]\n";}$this->error=rtrim($this->error);}function
connect($N,$V,$G){$this->_link=@sqlsrv_connect($N,array("UID"=>$V,"PWD"=>$G,"CharacterSet"=>"UTF-8"));if($this->_link){$od=sqlsrv_server_info($this->_link);$this->server_info=$od['SQLServerVersion'];}else$this->_get_error();return(bool)$this->_link;}function
quote($P){return"'".str_replace("'","''",$P)."'";}function
select_db($Cb){return$this->query("USE ".idf_escape($Cb));}function
query($H,$sh=false){$I=sqlsrv_query($this->_link,$H);$this->error="";if(!$I){$this->_get_error();return
false;}return$this->store_result($I);}function
multi_query($H){$this->_result=sqlsrv_query($this->_link,$H);$this->error="";if(!$this->_result){$this->_get_error();return
false;}return
true;}function
store_result($I=null){if(!$I)$I=$this->_result;if(sqlsrv_field_metadata($I))return
new
Min_Result($I);$this->affected_rows=sqlsrv_rows_affected($I);return
true;}function
next_result(){return
sqlsrv_next_result($this->_result);}function
result($H,$n=0){$I=$this->query($H);if(!is_object($I))return
false;$K=$I->fetch_row();return$K[$n];}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
Min_Result($I){$this->_result=$I;}function
_convert($K){foreach((array)$K
as$x=>$X){if(is_a($X,'DateTime'))$K[$x]=$X->format("Y-m-d H:i:s");}return$K;}function
fetch_assoc(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_ASSOC,SQLSRV_SCROLL_NEXT));}function
fetch_row(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_NUMERIC,SQLSRV_SCROLL_NEXT));}function
fetch_field(){if(!$this->_fields)$this->_fields=sqlsrv_field_metadata($this->_result);$n=$this->_fields[$this->_offset++];$J=new
stdClass;$J->name=$n["Name"];$J->orgname=$n["Name"];$J->type=($n["Type"]==1?254:0);return$J;}function
seek($D){for($r=0;$r<$D;$r++)sqlsrv_fetch($this->_result);}function
__destruct(){sqlsrv_free_stmt($this->_result);}}}elseif(extension_loaded("mssql")){class
Min_DB{var$extension="MSSQL",$_link,$_result,$server_info,$affected_rows,$error;function
connect($N,$V,$G){$this->_link=@mssql_connect($N,$V,$G);if($this->_link){$I=$this->query("SELECT SERVERPROPERTY('ProductLevel'), SERVERPROPERTY('Edition')");$K=$I->fetch_row();$this->server_info=$this->result("sp_server_info 2",2)." [$K[0]] $K[1]";}else$this->error=mssql_get_last_message();return(bool)$this->_link;}function
quote($P){return"'".str_replace("'","''",$P)."'";}function
select_db($Cb){return
mssql_select_db($Cb);}function
query($H,$sh=false){$I=mssql_query($H,$this->_link);$this->error="";if(!$I){$this->error=mssql_get_last_message();return
false;}if($I===true){$this->affected_rows=mssql_rows_affected($this->_link);return
true;}return
new
Min_Result($I);}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
mssql_next_result($this->_result);}function
result($H,$n=0){$I=$this->query($H);if(!is_object($I))return
false;return
mssql_result($I->_result,0,$n);}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
Min_Result($I){$this->_result=$I;$this->num_rows=mssql_num_rows($I);}function
fetch_assoc(){return
mssql_fetch_assoc($this->_result);}function
fetch_row(){return
mssql_fetch_row($this->_result);}function
num_rows(){return
mssql_num_rows($this->_result);}function
fetch_field(){$J=mssql_fetch_field($this->_result);$J->orgtable=$J->table;$J->orgname=$J->name;return$J;}function
seek($D){mssql_data_seek($this->_result,$D);}function
__destruct(){mssql_free_result($this->_result);}}}class
Min_Driver
extends
Min_SQL{function
insertUpdate($Q,$L,$sf){foreach($L
as$O){$zh=array();$Z=array();foreach($O
as$x=>$X){$zh[]="$x = $X";if(isset($sf[idf_unescape($x)]))$Z[]="$x = $X";}if(!queries("MERGE ".table($Q)." USING (VALUES(".implode(", ",$O).")) AS source (c".implode(", c",range(1,count($O))).") ON ".implode(" AND ",$Z)." WHEN MATCHED THEN UPDATE SET ".implode(", ",$zh)." WHEN NOT MATCHED THEN INSERT (".implode(", ",array_keys($O)).") VALUES (".implode(", ",$O).");"))return
false;}return
true;}function
begin(){return
queries("BEGIN TRANSACTION");}}function
idf_escape($t){return"[".str_replace("]","]]",$t)."]";}function
table($t){return($_GET["ns"]!=""?idf_escape($_GET["ns"]).".":"").idf_escape($t);}function
connect(){global$b;$g=new
Min_DB;$i=$b->credentials();if($g->connect($i[0],$i[1],$i[2]))return$g;return$g->error;}function
get_databases(){return
get_vals("EXEC sp_databases");}function
limit($H,$Z,$z,$D=0,$kg=" "){return($z!==null?" TOP (".($z+$D).")":"")." $H$Z";}function
limit1($H,$Z){return
limit($H,$Z,1);}function
db_collation($k,$ib){global$g;return$g->result("SELECT collation_name FROM sys.databases WHERE name =  ".q($k));}function
engines(){return
array();}function
logged_user(){global$g;return$g->result("SELECT SUSER_NAME()");}function
tables_list(){return
get_key_vals("SELECT name, type_desc FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V') ORDER BY name");}function
count_tables($j){global$g;$J=array();foreach($j
as$k){$g->select_db($k);$J[$k]=$g->result("SELECT COUNT(*) FROM INFORMATION_SCHEMA.TABLES");}return$J;}function
table_status($C=""){$J=array();foreach(get_rows("SELECT name AS Name, type_desc AS Engine FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V') ".($C!=""?"AND name = ".q($C):"ORDER BY name"))as$K){if($C!="")return$K;$J[$K["Name"]]=$K;}return$J;}function
is_view($R){return$R["Engine"]=="VIEW";}function
fk_support($R){return
true;}function
fields($Q){$J=array();foreach(get_rows("SELECT c.*, t.name type, d.definition [default]
FROM sys.all_columns c
JOIN sys.all_objects o ON c.object_id = o.object_id
JOIN sys.types t ON c.user_type_id = t.user_type_id
LEFT JOIN sys.default_constraints d ON c.default_object_id = d.parent_column_id
WHERE o.schema_id = SCHEMA_ID(".q(get_schema()).") AND o.type IN ('S', 'U', 'V') AND o.name = ".q($Q))as$K){$U=$K["type"];$y=(preg_match("~char|binary~",$U)?$K["max_length"]:($U=="decimal"?"$K[precision],$K[scale]":""));$J[$K["name"]]=array("field"=>$K["name"],"full_type"=>$U.($y?"($y)":""),"type"=>$U,"length"=>$y,"default"=>$K["default"],"null"=>$K["is_nullable"],"auto_increment"=>$K["is_identity"],"collation"=>$K["collation_name"],"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),"primary"=>$K["is_identity"],);}return$J;}function
indexes($Q,$h=null){$J=array();foreach(get_rows("SELECT i.name, key_ordinal, is_unique, is_primary_key, c.name AS column_name, is_descending_key
FROM sys.indexes i
INNER JOIN sys.index_columns ic ON i.object_id = ic.object_id AND i.index_id = ic.index_id
INNER JOIN sys.columns c ON ic.object_id = c.object_id AND ic.column_id = c.column_id
WHERE OBJECT_NAME(i.object_id) = ".q($Q),$h)as$K){$C=$K["name"];$J[$C]["type"]=($K["is_primary_key"]?"PRIMARY":($K["is_unique"]?"UNIQUE":"INDEX"));$J[$C]["lengths"]=array();$J[$C]["columns"][$K["key_ordinal"]]=$K["column_name"];$J[$C]["descs"][$K["key_ordinal"]]=($K["is_descending_key"]?'1':null);}return$J;}function
view($C){global$g;return
array("select"=>preg_replace('~^(?:[^[]|\\[[^]]*])*\\s+AS\\s+~isU','',$g->result("SELECT VIEW_DEFINITION FROM INFORMATION_SCHEMA.VIEWS WHERE TABLE_SCHEMA = SCHEMA_NAME() AND TABLE_NAME = ".q($C))));}function
collations(){$J=array();foreach(get_vals("SELECT name FROM fn_helpcollations()")as$d)$J[preg_replace('~_.*~','',$d)][]=$d;return$J;}function
information_schema($k){return
false;}function
error(){global$g;return
nl_br(h(preg_replace('~^(\\[[^]]*])+~m','',$g->error)));}function
create_database($k,$d){return
queries("CREATE DATABASE ".idf_escape($k).(preg_match('~^[a-z0-9_]+$~i',$d)?" COLLATE $d":""));}function
drop_databases($j){return
queries("DROP DATABASE ".implode(", ",array_map('idf_escape',$j)));}function
rename_database($C,$d){if(preg_match('~^[a-z0-9_]+$~i',$d))queries("ALTER DATABASE ".idf_escape(DB)." COLLATE $d");queries("ALTER DATABASE ".idf_escape(DB)." MODIFY NAME = ".idf_escape($C));return
true;}function
auto_increment(){return" IDENTITY".($_POST["Auto_increment"]!=""?"(".(+$_POST["Auto_increment"]).",1)":"")." PRIMARY KEY";}function
alter_table($Q,$C,$o,$Ic,$mb,$ic,$d,$Ja,$df){$c=array();foreach($o
as$n){$e=idf_escape($n[0]);$X=$n[1];if(!$X)$c["DROP"][]=" COLUMN $e";else{$X[1]=preg_replace("~( COLLATE )'(\\w+)'~","\\1\\2",$X[1]);if($n[0]=="")$c["ADD"][]="\n  ".implode("",$X).($Q==""?substr($Ic[$X[0]],16+strlen($X[0])):"");else{unset($X[6]);if($e!=$X[0])queries("EXEC sp_rename ".q(table($Q).".$e").", ".q(idf_unescape($X[0])).", 'COLUMN'");$c["ALTER COLUMN ".implode("",$X)][]="";}}}if($Q=="")return
queries("CREATE TABLE ".table($C)." (".implode(",",(array)$c["ADD"])."\n)");if($Q!=$C)queries("EXEC sp_rename ".q(table($Q)).", ".q($C));if($Ic)$c[""]=$Ic;foreach($c
as$x=>$X){if(!queries("ALTER TABLE ".idf_escape($C)." $x".implode(",",$X)))return
false;}return
true;}function
alter_indexes($Q,$c){$u=array();$Tb=array();foreach($c
as$X){if($X[2]=="DROP"){if($X[0]=="PRIMARY")$Tb[]=idf_escape($X[1]);else$u[]=idf_escape($X[1])." ON ".table($Q);}elseif(!queries(($X[0]!="PRIMARY"?"CREATE $X[0] ".($X[0]!="INDEX"?"INDEX ":"").idf_escape($X[1]!=""?$X[1]:uniqid($Q."_"))." ON ".table($Q):"ALTER TABLE ".table($Q)." ADD PRIMARY KEY")." (".implode(", ",$X[2]).")"))return
false;}return(!$u||queries("DROP INDEX ".implode(", ",$u)))&&(!$Tb||queries("ALTER TABLE ".table($Q)." DROP ".implode(", ",$Tb)));}function
last_id(){global$g;return$g->result("SELECT SCOPE_IDENTITY()");}function
explain($g,$H){$g->query("SET SHOWPLAN_ALL ON");$J=$g->query($H);$g->query("SET SHOWPLAN_ALL OFF");return$J;}function
found_rows($R,$Z){}function
foreign_keys($Q){$J=array();foreach(get_rows("EXEC sp_fkeys @fktable_name = ".q($Q))as$K){$p=&$J[$K["FK_NAME"]];$p["table"]=$K["PKTABLE_NAME"];$p["source"][]=$K["FKCOLUMN_NAME"];$p["target"][]=$K["PKCOLUMN_NAME"];}return$J;}function
truncate_tables($S){return
apply_queries("TRUNCATE TABLE",$S);}function
drop_views($Mh){return
queries("DROP VIEW ".implode(", ",array_map('table',$Mh)));}function
drop_tables($S){return
queries("DROP TABLE ".implode(", ",array_map('table',$S)));}function
move_tables($S,$Mh,$Pg){return
apply_queries("ALTER SCHEMA ".idf_escape($Pg)." TRANSFER",array_merge($S,$Mh));}function
trigger($C){if($C=="")return
array();$L=get_rows("SELECT s.name [Trigger],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT' WHEN OBJECTPROPERTY(s.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE' WHEN OBJECTPROPERTY(s.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing],
c.text
FROM sysobjects s
JOIN syscomments c ON s.id = c.id
WHERE s.xtype = 'TR' AND s.name = ".q($C));$J=reset($L);if($J)$J["Statement"]=preg_replace('~^.+\\s+AS\\s+~isU','',$J["text"]);return$J;}function
triggers($Q){$J=array();foreach(get_rows("SELECT sys1.name,
CASE WHEN OBJECTPROPERTY(sys1.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT' WHEN OBJECTPROPERTY(sys1.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE' WHEN OBJECTPROPERTY(sys1.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(sys1.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing]
FROM sysobjects sys1
JOIN sysobjects sys2 ON sys1.parent_obj = sys2.id
WHERE sys1.xtype = 'TR' AND sys2.name = ".q($Q))as$K)$J[$K["name"]]=array($K["Timing"],$K["Event"]);return$J;}function
trigger_options(){return
array("Timing"=>array("AFTER","INSTEAD OF"),"Type"=>array("AS"),);}function
schemas(){return
get_vals("SELECT name FROM sys.schemas");}function
get_schema(){global$g;if($_GET["ns"]!="")return$_GET["ns"];return$g->result("SELECT SCHEMA_NAME()");}function
set_schema($dg){return
true;}function
use_sql($Cb){return"USE ".idf_escape($Cb);}function
show_variables(){return
array();}function
show_status(){return
array();}function
convert_field($n){}function
unconvert_field($n,$J){return$J;}function
support($Bc){return
preg_match('~^(columns|database|drop_col|indexes|scheme|sql|table|trigger|view|view_trigger)$~',$Bc);}$w="mssql";$rh=array();$_g=array();foreach(array('Numbers'=>array("tinyint"=>3,"smallint"=>5,"int"=>10,"bigint"=>20,"bit"=>1,"decimal"=>0,"real"=>12,"float"=>53,"smallmoney"=>10,"money"=>20),'Date and time'=>array("date"=>10,"smalldatetime"=>19,"datetime"=>19,"datetime2"=>19,"time"=>8,"datetimeoffset"=>10),'Strings'=>array("char"=>8000,"varchar"=>8000,"text"=>2147483647,"nchar"=>4000,"nvarchar"=>4000,"ntext"=>1073741823),'Binary'=>array("binary"=>8000,"varbinary"=>8000,"image"=>2147483647),)as$x=>$X){$rh+=$X;$_g[$x]=array_keys($X);}$yh=array();$He=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$Rc=array("len","lower","round","upper");$Wc=array("avg","count","count distinct","max","min","sum");$ac=array(array("date|time"=>"getdate",),array("int|decimal|real|float|money|datetime"=>"+/-","char|text"=>"+",));}$Sb["simpledb"]="SimpleDB";if(isset($_GET["simpledb"])){$pf=array("SimpleXML");define("DRIVER","simpledb");if(class_exists('SimpleXMLElement')){class
Min_DB{var$extension="SimpleXML",$server_info='2009-04-15',$error,$timeout,$next,$affected_rows,$_result;function
select_db($Cb){return($Cb=="domain");}function
query($H,$sh=false){$F=array('SelectExpression'=>$H,'ConsistentRead'=>'true');if($this->next)$F['NextToken']=$this->next;$I=sdb_request_all('Select','Item',$F,$this->timeout);if($I===false)return$I;if(preg_match('~^\s*SELECT\s+COUNT\(~i',$H)){$Dg=0;foreach($I
as$yd)$Dg+=$yd->Attribute->Value;$I=array((object)array('Attribute'=>array((object)array('Name'=>'Count','Value'=>$Dg,))));}return
new
Min_Result($I);}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
quote($P){return"'".str_replace("'","''",$P)."'";}}class
Min_Result{var$num_rows,$_rows=array(),$_offset=0;function
Min_Result($I){foreach($I
as$yd){$K=array();if($yd->Name!='')$K['itemName()']=(string)$yd->Name;foreach($yd->Attribute
as$Ga){$C=$this->_processValue($Ga->Name);$Y=$this->_processValue($Ga->Value);if(isset($K[$C])){$K[$C]=(array)$K[$C];$K[$C][]=$Y;}else$K[$C]=$Y;}$this->_rows[]=$K;foreach($K
as$x=>$X){if(!isset($this->_rows[0][$x]))$this->_rows[0][$x]=null;}}$this->num_rows=count($this->_rows);}function
_processValue($cc){return(is_object($cc)&&$cc['encoding']=='base64'?base64_decode($cc):(string)$cc);}function
fetch_assoc(){$K=current($this->_rows);if(!$K)return$K;$J=array();foreach($this->_rows[0]as$x=>$X)$J[$x]=$K[$x];next($this->_rows);return$J;}function
fetch_row(){$J=$this->fetch_assoc();if(!$J)return$J;return
array_values($J);}function
fetch_field(){$Dd=array_keys($this->_rows[0]);return(object)array('name'=>$Dd[$this->_offset++]);}}}class
Min_Driver
extends
Min_SQL{public$sf="itemName()";function
_chunkRequest($hd,$ua,$F,$uc=array()){global$g;foreach(array_chunk($hd,25)as$bb){$Ze=$F;foreach($bb
as$r=>$s){$Ze["Item.$r.ItemName"]=$s;foreach($uc
as$x=>$X)$Ze["Item.$r.$x"]=$X;}if(!sdb_request($ua,$Ze))return
false;}$g->affected_rows=count($hd);return
true;}function
_extractIds($Q,$Cf,$z){$J=array();if(preg_match_all("~itemName\(\) = (('[^']*+')+)~",$Cf,$Wd))$J=array_map('idf_unescape',$Wd[1]);else{foreach(sdb_request_all('Select','Item',array('SelectExpression'=>'SELECT itemName() FROM '.table($Q).$Cf.($z?" LIMIT 1":"")))as$yd)$J[]=$yd->Name;}return$J;}function
select($Q,$M,$Z,$Uc,$Me=array(),$z=1,$E=0,$uf=false){global$g;$g->next=$_GET["next"];$J=parent::select($Q,$M,$Z,$Uc,$Me,$z,$E,$uf);$g->next=0;return$J;}function
delete($Q,$Cf,$z=0){return$this->_chunkRequest($this->_extractIds($Q,$Cf,$z),'BatchDeleteAttributes',array('DomainName'=>$Q));}function
update($Q,$O,$Cf,$z=0,$kg="\n"){$Ib=array();$sd=array();$r=0;$hd=$this->_extractIds($Q,$Cf,$z);$s=idf_unescape($O["`itemName()`"]);unset($O["`itemName()`"]);foreach($O
as$x=>$X){$x=idf_unescape($x);if($X=="NULL"||($s!=""&&array($s)!=$hd))$Ib["Attribute.".count($Ib).".Name"]=$x;if($X!="NULL"){foreach((array)$X
as$_d=>$W){$sd["Attribute.$r.Name"]=$x;$sd["Attribute.$r.Value"]=(is_array($X)?$W:idf_unescape($W));if(!$_d)$sd["Attribute.$r.Replace"]="true";$r++;}}}$F=array('DomainName'=>$Q);return(!$sd||$this->_chunkRequest(($s!=""?array($s):$hd),'BatchPutAttributes',$F,$sd))&&(!$Ib||$this->_chunkRequest($hd,'BatchDeleteAttributes',$F,$Ib));}function
insert($Q,$O){$F=array("DomainName"=>$Q);$r=0;foreach($O
as$C=>$Y){if($Y!="NULL"){$C=idf_unescape($C);if($C=="itemName()")$F["ItemName"]=idf_unescape($Y);else{foreach((array)$Y
as$X){$F["Attribute.$r.Name"]=$C;$F["Attribute.$r.Value"]=(is_array($Y)?$X:idf_unescape($Y));$r++;}}}}return
sdb_request('PutAttributes',$F);}function
insertUpdate($Q,$L,$sf){foreach($L
as$O){if(!$this->update($Q,$O,"WHERE `itemName()` = ".q($O["`itemName()`"])))return
false;}return
true;}function
begin(){return
false;}function
commit(){return
false;}function
rollback(){return
false;}}function
connect(){return
new
Min_DB;}function
support($Bc){return
preg_match('~sql~',$Bc);}function
logged_user(){global$b;$i=$b->credentials();return$i[1];}function
get_databases(){return
array("domain");}function
collations(){return
array();}function
db_collation($k,$ib){}function
tables_list(){global$g;$J=array();foreach(sdb_request_all('ListDomains','DomainName')as$Q)$J[(string)$Q]='table';if($g->error&&defined("PAGE_HEADER"))echo"<p class='error'>".error()."\n";return$J;}function
table_status($C="",$Ac=false){$J=array();foreach(($C!=""?array($C=>true):tables_list())as$Q=>$U){$K=array("Name"=>$Q,"Auto_increment"=>"");if(!$Ac){$je=sdb_request('DomainMetadata',array('DomainName'=>$Q));if($je){foreach(array("Rows"=>"ItemCount","Data_length"=>"ItemNamesSizeBytes","Index_length"=>"AttributeValuesSizeBytes","Data_free"=>"AttributeNamesSizeBytes",)as$x=>$X)$K[$x]=(string)$je->$X;}}if($C!="")return$K;$J[$Q]=$K;}return$J;}function
explain($g,$H){}function
error(){global$g;return
h($g->error);}function
information_schema(){}function
is_view($R){}function
indexes($Q,$h=null){return
array(array("type"=>"PRIMARY","columns"=>array("itemName()")),);}function
fields($Q){return
fields_from_edit();}function
foreign_keys($Q){return
array();}function
table($t){return
idf_escape($t);}function
idf_escape($t){return"`".str_replace("`","``",$t)."`";}function
limit($H,$Z,$z,$D=0,$kg=" "){return" $H$Z".($z!==null?$kg."LIMIT $z":"");}function
unconvert_field($n,$J){return$J;}function
fk_support($R){}function
engines(){return
array();}function
alter_table($Q,$C,$o,$Ic,$mb,$ic,$d,$Ja,$df){return($Q==""&&sdb_request('CreateDomain',array('DomainName'=>$C)));}function
drop_tables($S){foreach($S
as$Q){if(!sdb_request('DeleteDomain',array('DomainName'=>$Q)))return
false;}return
true;}function
count_tables($j){foreach($j
as$k)return
array($k=>count(tables_list()));}function
found_rows($R,$Z){return($Z?null:$R["Rows"]);}function
last_id(){}function
hmac($_a,$Ab,$x,$Gf=false){$Sa=64;if(strlen($x)>$Sa)$x=pack("H*",$_a($x));$x=str_pad($x,$Sa,"\0");$Ad=$x^str_repeat("\x36",$Sa);$Bd=$x^str_repeat("\x5C",$Sa);$J=$_a($Bd.pack("H*",$_a($Ad.$Ab)));if($Gf)$J=pack("H*",$J);return$J;}function
sdb_request($ua,$F=array()){global$b,$g;list($ed,$F['AWSAccessKeyId'],$gg)=$b->credentials();$F['Action']=$ua;$F['Timestamp']=gmdate('Y-m-d\TH:i:s+00:00');$F['Version']='2009-04-15';$F['SignatureVersion']=2;$F['SignatureMethod']='HmacSHA1';ksort($F);$H='';foreach($F
as$x=>$X)$H.='&'.rawurlencode($x).'='.rawurlencode($X);$H=str_replace('%7E','~',substr($H,1));$H.="&Signature=".urlencode(base64_encode(hmac('sha1',"POST\n".preg_replace('~^https?://~','',$ed)."\n/\n$H",$gg,true)));@ini_set('track_errors',1);$Dc=@file_get_contents((preg_match('~^https?://~',$ed)?$ed:"http://$ed"),false,stream_context_create(array('http'=>array('method'=>'POST','content'=>$H,'ignore_errors'=>1,))));if(!$Dc){$g->error=$php_errormsg;return
false;}libxml_use_internal_errors(true);$Sh=simplexml_load_string($Dc);if(!$Sh){$m=libxml_get_last_error();$g->error=$m->message;return
false;}if($Sh->Errors){$m=$Sh->Errors->Error;$g->error="$m->Message ($m->Code)";return
false;}$g->error='';$Og=$ua."Result";return($Sh->$Og?$Sh->$Og:true);}function
sdb_request_all($ua,$Og,$F=array(),$Xg=0){$J=array();$wg=($Xg?microtime(true):0);$z=(preg_match('~LIMIT\s+(\d+)\s*$~i',$F['SelectExpression'],$B)?$B[1]:0);do{$Sh=sdb_request($ua,$F);if(!$Sh)break;foreach($Sh->$Og
as$cc)$J[]=$cc;if($z&&count($J)>=$z){$_GET["next"]=$Sh->NextToken;break;}if($Xg&&microtime(true)-$wg>$Xg)return
false;$F['NextToken']=$Sh->NextToken;if($z)$F['SelectExpression']=preg_replace('~\d+\s*$~',$z-count($J),$F['SelectExpression']);}while($Sh->NextToken);return$J;}$w="simpledb";$He=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","IS NOT NULL");$Rc=array();$Wc=array("count");$ac=array(array("json"));}$Sb["mongo"]="MongoDB (beta)";if(isset($_GET["mongo"])){$pf=array("mongo");define("DRIVER","mongo");if(class_exists('MongoDB')){class
Min_DB{var$extension="Mongo",$error,$last_id,$_link,$_db;function
connect($N,$V,$G){global$b;$k=$b->database();$Ke=array();if($V!=""){$Ke["username"]=$V;$Ke["password"]=$G;}if($k!="")$Ke["db"]=$k;try{$this->_link=@new
MongoClient("mongodb://$N",$Ke);return
true;}catch(Exception$pc){$this->error=$pc->getMessage();return
false;}}function
query($H){return
false;}function
select_db($Cb){try{$this->_db=$this->_link->selectDB($Cb);return
true;}catch(Exception$pc){$this->error=$pc->getMessage();return
false;}}function
quote($P){return$P;}}class
Min_Result{var$num_rows,$_rows=array(),$_offset=0,$_charset=array();function
Min_Result($I){foreach($I
as$yd){$K=array();foreach($yd
as$x=>$X){if(is_a($X,'MongoBinData'))$this->_charset[$x]=63;$K[$x]=(is_a($X,'MongoId')?'ObjectId("'.strval($X).'")':(is_a($X,'MongoDate')?gmdate("Y-m-d H:i:s",$X->sec)." GMT":(is_a($X,'MongoBinData')?$X->bin:(is_a($X,'MongoRegex')?strval($X):(is_object($X)?get_class($X):$X)))));}$this->_rows[]=$K;foreach($K
as$x=>$X){if(!isset($this->_rows[0][$x]))$this->_rows[0][$x]=null;}}$this->num_rows=count($this->_rows);}function
fetch_assoc(){$K=current($this->_rows);if(!$K)return$K;$J=array();foreach($this->_rows[0]as$x=>$X)$J[$x]=$K[$x];next($this->_rows);return$J;}function
fetch_row(){$J=$this->fetch_assoc();if(!$J)return$J;return
array_values($J);}function
fetch_field(){$Dd=array_keys($this->_rows[0]);$C=$Dd[$this->_offset++];return(object)array('name'=>$C,'charsetnr'=>$this->_charset[$C],);}}}class
Min_Driver
extends
Min_SQL{public$sf="_id";function
quote($Y){return($Y===null?$Y:parent::quote($Y));}function
select($Q,$M,$Z,$Uc,$Me=array(),$z=1,$E=0,$uf=false){$M=($M==array("*")?array():array_fill_keys($M,true));$rg=array();foreach($Me
as$X){$X=preg_replace('~ DESC$~','',$X,1,$wb);$rg[$X]=($wb?-1:1);}return
new
Min_Result(iterator_to_array($this->_conn->_db->selectCollection($Q)->find(array(),$M)->sort($rg)->limit(+$z)->skip($E*$z)));}function
insert($Q,$O){try{$J=$this->_conn->_db->selectCollection($Q)->insert($O);$this->_conn->errno=$J['code'];$this->_conn->error=$J['err'];$this->_conn->last_id=$O['_id'];return!$J['err'];}catch(Exception$pc){$this->_conn->error=$pc->getMessage();return
false;}}}function
connect(){global$b;$g=new
Min_DB;$i=$b->credentials();if($g->connect($i[0],$i[1],$i[2]))return$g;return$g->error;}function
error(){global$g;return
h($g->error);}function
logged_user(){global$b;$i=$b->credentials();return$i[1];}function
get_databases($Hc){global$g;$J=array();$Fb=$g->_link->listDBs();foreach($Fb['databases']as$k)$J[]=$k['name'];return$J;}function
collations(){return
array();}function
db_collation($k,$ib){}function
count_tables($j){global$g;$J=array();foreach($j
as$k)$J[$k]=count($g->_link->selectDB($k)->getCollectionNames(true));return$J;}function
tables_list(){global$g;return
array_fill_keys($g->_db->getCollectionNames(true),'table');}function
table_status($C="",$Ac=false){$J=array();foreach(tables_list()as$Q=>$U){$J[$Q]=array("Name"=>$Q);if($C==$Q)return$J[$Q];}return$J;}function
information_schema(){}function
is_view($R){}function
drop_databases($j){global$g;foreach($j
as$k){$Rf=$g->_link->selectDB($k)->drop();if(!$Rf['ok'])return
false;}return
true;}function
indexes($Q,$h=null){global$g;$J=array();foreach($g->_db->selectCollection($Q)->getIndexInfo()as$u){$Lb=array();foreach($u["key"]as$e=>$U)$Lb[]=($U==-1?'1':null);$J[$u["name"]]=array("type"=>($u["name"]=="_id_"?"PRIMARY":($u["unique"]?"UNIQUE":"INDEX")),"columns"=>array_keys($u["key"]),"lengths"=>array(),"descs"=>$Lb,);}return$J;}function
fields($Q){return
fields_from_edit();}function
convert_field($n){}function
unconvert_field($n,$J){return$J;}function
foreign_keys($Q){return
array();}function
fk_support($R){}function
engines(){return
array();}function
found_rows($R,$Z){global$g;return$g->_db->selectCollection($_GET["select"])->count($Z);}function
alter_table($Q,$C,$o,$Ic,$mb,$ic,$d,$Ja,$df){global$g;if($Q==""){$g->_db->createCollection($C);return
true;}}function
drop_tables($S){global$g;foreach($S
as$Q){$Rf=$g->_db->selectCollection($Q)->drop();if(!$Rf['ok'])return
false;}return
true;}function
truncate_tables($S){global$g;foreach($S
as$Q){$Rf=$g->_db->selectCollection($Q)->remove();if(!$Rf['ok'])return
false;}return
true;}function
alter_indexes($Q,$c){global$g;foreach($c
as$X){list($U,$C,$O)=$X;if($O=="DROP")$J=$g->_db->command(array("deleteIndexes"=>$Q,"index"=>$C));else{$f=array();foreach($O
as$e){$e=preg_replace('~ DESC$~','',$e,1,$wb);$f[$e]=($wb?-1:1);}$J=$g->_db->selectCollection($Q)->ensureIndex($f,array("unique"=>($U=="UNIQUE"),"name"=>$C,));}if($J['errmsg']){$g->error=$J['errmsg'];return
false;}}return
true;}function
last_id(){global$g;return$g->last_id;}function
table($t){return$t;}function
idf_escape($t){return$t;}function
support($Bc){return
preg_match("~database|indexes~",$Bc);}$w="mongo";$He=array("=");$Rc=array();$Wc=array();$ac=array(array("json"));}$Sb["elastic"]="Elasticsearch (beta)";if(isset($_GET["elastic"])){$pf=array("json");define("DRIVER","elastic");if(function_exists('json_decode')){class
Min_DB{var$extension="JSON",$server_info,$errno,$error,$_url;function
rootQuery($gf,$rb=array(),$ke='GET'){@ini_set('track_errors',1);$Dc=@file_get_contents($this->_url.'/'.ltrim($gf,'/'),false,stream_context_create(array('http'=>array('method'=>$ke,'content'=>json_encode($rb),'ignore_errors'=>1,))));if(!$Dc){$this->error=$php_errormsg;return$Dc;}if(!preg_match('~^HTTP/[0-9.]+ 2~i',$http_response_header[0])){$this->error=$Dc;return
false;}$J=json_decode($Dc,true);if(!$J){$this->errno=json_last_error();if(function_exists('json_last_error_msg'))$this->error=json_last_error_msg();else{$qb=get_defined_constants(true);foreach($qb['json']as$C=>$Y){if($Y==$this->errno&&preg_match('~^JSON_ERROR_~',$C)){$this->error=$C;break;}}}}return$J;}function
query($gf,$rb=array(),$ke='GET'){return$this->rootQuery(($this->_db!=""?"$this->_db/":"/").ltrim($gf,'/'),$rb,$ke);}function
connect($N,$V,$G){$this->_url="http://$V:$G@$N/";$J=$this->query('');if($J)$this->server_info=$J['version']['number'];return(bool)$J;}function
select_db($Cb){$this->_db=$Cb;return
true;}function
quote($P){return$P;}}class
Min_Result{var$num_rows,$_rows;function
Min_Result($L){$this->num_rows=count($this->_rows);$this->_rows=$L;reset($this->_rows);}function
fetch_assoc(){$J=current($this->_rows);next($this->_rows);return$J;}function
fetch_row(){return
array_values($this->fetch_assoc());}}}class
Min_Driver
extends
Min_SQL{function
select($Q,$M,$Z,$Uc,$Me=array(),$z=1,$E=0,$uf=false){global$b;$Ab=array();$H="$Q/_search";if($M!=array("*"))$Ab["fields"]=$M;if($Me){$rg=array();foreach($Me
as$gb){$gb=preg_replace('~ DESC$~','',$gb,1,$wb);$rg[]=($wb?array($gb=>"desc"):$gb);}$Ab["sort"]=$rg;}if($z){$Ab["size"]=+$z;if($E)$Ab["from"]=($E*$z);}foreach((array)$_GET["where"]as$X){if("$X[col]$X[val]"!=""){$Sg=array("match"=>array(($X["col"]!=""?$X["col"]:"_all")=>$X["val"]));if($X["op"]=="=")$Ab["query"]["filtered"]["filter"]["and"][]=$Sg;else$Ab["query"]["filtered"]["query"]["bool"]["must"][]=$Sg;}}if($Ab["query"]&&!$Ab["query"]["filtered"]["query"])$Ab["query"]["filtered"]["query"]=array("match_all"=>array());if($uf)echo$b->selectQuery("$H: ".print_r($Ab,true));$fg=$this->_conn->query($H,$Ab);if(!$fg)return
false;$J=array();foreach($fg['hits']['hits']as$dd){$K=array();$o=$dd['_source'];if($M!=array("*")){$o=array();foreach($M
as$x)$o[$x]=$dd['fields'][$x];}foreach($o
as$x=>$X)$K[$x]=(is_array($X)?json_encode($X):$X);$J[]=$K;}return
new
Min_Result($J);}}function
connect(){global$b;$g=new
Min_DB;$i=$b->credentials();if($g->connect($i[0],$i[1],$i[2]))return$g;return$g->error;}function
support($Bc){return
preg_match("~database|table|columns~",$Bc);}function
logged_user(){global$b;$i=$b->credentials();return$i[1];}function
get_databases(){global$g;$J=$g->rootQuery('_aliases');if($J)$J=array_keys($J);return$J;}function
collations(){return
array();}function
db_collation($k,$ib){}function
count_tables($j){global$g;$J=$g->query('_mapping');if($J)$J=array_map('count',$J);return$J;}function
tables_list(){global$g;$J=$g->query('_mapping');if($J)$J=array_fill_keys(array_keys(reset($J)),'table');return$J;}function
table_status($C="",$Ac=false){$J=tables_list();if($J){foreach($J
as$x=>$U)$J[$x]=array("Name"=>$x,"Engine"=>$U);if($C!="")return$J[$C];}return$J;}function
error(){global$g;return
h($g->error);}function
information_schema(){}function
is_view($R){}function
indexes($Q,$h=null){return
array(array("type"=>"PRIMARY","columns"=>array("_id")),);}function
fields($Q){global$g;$Ud=$g->query("$Q/_mapping");$J=array();if($Ud){foreach($Ud[$Q]['properties']as$C=>$n)$J[$C]=array("field"=>$C,"full_type"=>$n["type"],"type"=>$n["type"],"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),);}return$J;}function
foreign_keys($Q){return
array();}function
table($t){return$t;}function
idf_escape($t){return$t;}function
convert_field($n){}function
unconvert_field($n,$J){return$J;}function
fk_support($R){}function
found_rows($R,$Z){return
null;}function
create_database($k){global$g;return$g->rootQuery(urlencode($k),array(),'PUT');}function
drop_databases($j){global$g;return$g->rootQuery(urlencode(implode(',',$j)),array(),'DELETE');}function
drop_tables($S){global$g;$J=true;foreach($S
as$Q)$J=$J&&$g->query(urlencode($Q),array(),'DELETE');return$J;}$w="elastic";$He=array("=","query");$Rc=array();$Wc=array();$ac=array(array("json"));}$Sb=array("server"=>"MySQL")+$Sb;if(!defined("DRIVER")){$pf=array("MySQLi","MySQL","PDO_MySQL");define("DRIVER","server");if(extension_loaded("mysqli")){class
Min_DB
extends
MySQLi{var$extension="MySQLi";function
Min_DB(){parent::init();}function
connect($N,$V,$G){mysqli_report(MYSQLI_REPORT_OFF);list($ed,$lf)=explode(":",$N,2);$J=@$this->real_connect(($N!=""?$ed:ini_get("mysqli.default_host")),($N.$V!=""?$V:ini_get("mysqli.default_user")),($N.$V.$G!=""?$G:ini_get("mysqli.default_pw")),null,(is_numeric($lf)?$lf:ini_get("mysqli.default_port")),(!is_numeric($lf)?$lf:null));if($J){if(method_exists($this,'set_charset'))$this->set_charset("utf8");else$this->query("SET NAMES utf8");}return$J;}function
result($H,$n=0){$I=$this->query($H);if(!$I)return
false;$K=$I->fetch_array();return$K[$n];}function
quote($P){return"'".$this->escape_string($P)."'";}}}elseif(extension_loaded("mysql")&&!(ini_get("sql.safe_mode")&&extension_loaded("pdo_mysql"))){class
Min_DB{var$extension="MySQL",$server_info,$affected_rows,$errno,$error,$_link,$_result;function
connect($N,$V,$G){$this->_link=@mysql_connect(($N!=""?$N:ini_get("mysql.default_host")),("$N$V"!=""?$V:ini_get("mysql.default_user")),("$N$V$G"!=""?$G:ini_get("mysql.default_password")),true,131072);if($this->_link){$this->server_info=mysql_get_server_info($this->_link);if(function_exists('mysql_set_charset'))mysql_set_charset("utf8",$this->_link);else$this->query("SET NAMES utf8");}else$this->error=mysql_error();return(bool)$this->_link;}function
quote($P){return"'".mysql_real_escape_string($P,$this->_link)."'";}function
select_db($Cb){return
mysql_select_db($Cb,$this->_link);}function
query($H,$sh=false){$I=@($sh?mysql_unbuffered_query($H,$this->_link):mysql_query($H,$this->_link));$this->error="";if(!$I){$this->errno=mysql_errno($this->_link);$this->error=mysql_error($this->_link);return
false;}if($I===true){$this->affected_rows=mysql_affected_rows($this->_link);$this->info=mysql_info($this->_link);return
true;}return
new
Min_Result($I);}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($H,$n=0){$I=$this->query($H);if(!$I||!$I->num_rows)return
false;return
mysql_result($I->_result,0,$n);}}class
Min_Result{var$num_rows,$_result,$_offset=0;function
Min_Result($I){$this->_result=$I;$this->num_rows=mysql_num_rows($I);}function
fetch_assoc(){return
mysql_fetch_assoc($this->_result);}function
fetch_row(){return
mysql_fetch_row($this->_result);}function
fetch_field(){$J=mysql_fetch_field($this->_result,$this->_offset++);$J->orgtable=$J->table;$J->orgname=$J->name;$J->charsetnr=($J->blob?63:0);return$J;}function
__destruct(){mysql_free_result($this->_result);}}}elseif(extension_loaded("pdo_mysql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_MySQL";function
connect($N,$V,$G){$this->dsn("mysql:charset=utf8;host=".str_replace(":",";unix_socket=",preg_replace('~:(\\d)~',';port=\\1',$N)),$V,$G);$this->query("SET NAMES utf8");return
true;}function
select_db($Cb){return$this->query("USE ".idf_escape($Cb));}function
query($H,$sh=false){$this->setAttribute(1000,!$sh);return
parent::query($H,$sh);}}}class
Min_Driver
extends
Min_SQL{function
insert($Q,$O){return($O?parent::insert($Q,$O):queries("INSERT INTO ".table($Q)." ()\nVALUES ()"));}function
insertUpdate($Q,$L,$sf){$f=array_keys(reset($L));$qf="INSERT INTO ".table($Q)." (".implode(", ",$f).") VALUES\n";$Hh=array();foreach($f
as$x)$Hh[$x]="$x = VALUES($x)";$Cg="\nON DUPLICATE KEY UPDATE ".implode(", ",$Hh);$Hh=array();$y=0;foreach($L
as$O){$Y="(".implode(", ",$O).")";if($Hh&&(strlen($qf)+$y+strlen($Y)+strlen($Cg)>1e6)){if(!queries($qf.implode(",\n",$Hh).$Cg))return
false;$Hh=array();$y=0;}$Hh[]=$Y;$y+=strlen($Y)+2;}return
queries($qf.implode(",\n",$Hh).$Cg);}}function
idf_escape($t){return"`".str_replace("`","``",$t)."`";}function
table($t){return
idf_escape($t);}function
connect(){global$b;$g=new
Min_DB;$i=$b->credentials();if($g->connect($i[0],$i[1],$i[2])){$g->query("SET sql_quote_show_create = 1, autocommit = 1");return$g;}$J=$g->error;if(function_exists('iconv')&&!is_utf8($J)&&strlen($bg=iconv("windows-1250","utf-8",$J))>strlen($J))$J=$bg;return$J;}function
get_databases($Hc){global$g;$J=get_session("dbs");if($J===null){$H=($g->server_info>=5?"SELECT SCHEMA_NAME FROM information_schema.SCHEMATA":"SHOW DATABASES");$J=($Hc?slow_query($H):get_vals($H));restart_session();set_session("dbs",$J);stop_session();}return$J;}function
limit($H,$Z,$z,$D=0,$kg=" "){return" $H$Z".($z!==null?$kg."LIMIT $z".($D?" OFFSET $D":""):"");}function
limit1($H,$Z){return
limit($H,$Z,1);}function
db_collation($k,$ib){global$g;$J=null;$xb=$g->result("SHOW CREATE DATABASE ".idf_escape($k),1);if(preg_match('~ COLLATE ([^ ]+)~',$xb,$B))$J=$B[1];elseif(preg_match('~ CHARACTER SET ([^ ]+)~',$xb,$B))$J=$ib[$B[1]][-1];return$J;}function
engines(){$J=array();foreach(get_rows("SHOW ENGINES")as$K){if(preg_match("~YES|DEFAULT~",$K["Support"]))$J[]=$K["Engine"];}return$J;}function
logged_user(){global$g;return$g->result("SELECT USER()");}function
tables_list(){global$g;return
get_key_vals($g->server_info>=5?"SELECT TABLE_NAME, TABLE_TYPE FROM information_schema.TABLES WHERE TABLE_SCHEMA = DATABASE() ORDER BY TABLE_NAME":"SHOW TABLES");}function
count_tables($j){$J=array();foreach($j
as$k)$J[$k]=count(get_vals("SHOW TABLES IN ".idf_escape($k)));return$J;}function
table_status($C="",$Ac=false){global$g;$J=array();foreach(get_rows($Ac&&$g->server_info>=5?"SELECT TABLE_NAME AS Name, Engine, TABLE_COMMENT AS Comment FROM information_schema.TABLES WHERE TABLE_SCHEMA = DATABASE() ".($C!=""?"AND TABLE_NAME = ".q($C):"ORDER BY Name"):"SHOW TABLE STATUS".($C!=""?" LIKE ".q(addcslashes($C,"%_\\")):""))as$K){if($K["Engine"]=="InnoDB")$K["Comment"]=preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$K["Comment"]);if(!isset($K["Engine"]))$K["Comment"]="";if($C!="")return$K;$J[$K["Name"]]=$K;}return$J;}function
is_view($R){return$R["Engine"]===null;}function
fk_support($R){return
preg_match('~InnoDB|IBMDB2I~i',$R["Engine"]);}function
fields($Q){$J=array();foreach(get_rows("SHOW FULL COLUMNS FROM ".table($Q))as$K){preg_match('~^([^( ]+)(?:\\((.+)\\))?( unsigned)?( zerofill)?$~',$K["Type"],$B);$J[$K["Field"]]=array("field"=>$K["Field"],"full_type"=>$K["Type"],"type"=>$B[1],"length"=>$B[2],"unsigned"=>ltrim($B[3].$B[4]),"default"=>($K["Default"]!=""||preg_match("~char|set~",$B[1])?$K["Default"]:null),"null"=>($K["Null"]=="YES"),"auto_increment"=>($K["Extra"]=="auto_increment"),"on_update"=>(preg_match('~^on update (.+)~i',$K["Extra"],$B)?$B[1]:""),"collation"=>$K["Collation"],"privileges"=>array_flip(preg_split('~, *~',$K["Privileges"])),"comment"=>$K["Comment"],"primary"=>($K["Key"]=="PRI"),);}return$J;}function
indexes($Q,$h=null){$J=array();foreach(get_rows("SHOW INDEX FROM ".table($Q),$h)as$K){$J[$K["Key_name"]]["type"]=($K["Key_name"]=="PRIMARY"?"PRIMARY":($K["Index_type"]=="FULLTEXT"?"FULLTEXT":($K["Non_unique"]?"INDEX":"UNIQUE")));$J[$K["Key_name"]]["columns"][]=$K["Column_name"];$J[$K["Key_name"]]["lengths"][]=$K["Sub_part"];$J[$K["Key_name"]]["descs"][]=null;}return$J;}function
foreign_keys($Q){global$g,$De;static$if='`(?:[^`]|``)+`';$J=array();$yb=$g->result("SHOW CREATE TABLE ".table($Q),1);if($yb){preg_match_all("~CONSTRAINT ($if) FOREIGN KEY \\(((?:$if,? ?)+)\\) REFERENCES ($if)(?:\\.($if))? \\(((?:$if,? ?)+)\\)(?: ON DELETE ($De))?(?: ON UPDATE ($De))?~",$yb,$Wd,PREG_SET_ORDER);foreach($Wd
as$B){preg_match_all("~$if~",$B[2],$sg);preg_match_all("~$if~",$B[5],$Pg);$J[idf_unescape($B[1])]=array("db"=>idf_unescape($B[4]!=""?$B[3]:$B[4]),"table"=>idf_unescape($B[4]!=""?$B[4]:$B[3]),"source"=>array_map('idf_unescape',$sg[0]),"target"=>array_map('idf_unescape',$Pg[0]),"on_delete"=>($B[6]?$B[6]:"RESTRICT"),"on_update"=>($B[7]?$B[7]:"RESTRICT"),);}}return$J;}function
view($C){global$g;return
array("select"=>preg_replace('~^(?:[^`]|`[^`]*`)*\\s+AS\\s+~isU','',$g->result("SHOW CREATE VIEW ".table($C),1)));}function
collations(){$J=array();foreach(get_rows("SHOW COLLATION")as$K){if($K["Default"])$J[$K["Charset"]][-1]=$K["Collation"];else$J[$K["Charset"]][]=$K["Collation"];}ksort($J);foreach($J
as$x=>$X)asort($J[$x]);return$J;}function
information_schema($k){global$g;return($g->server_info>=5&&$k=="information_schema")||($g->server_info>=5.5&&$k=="performance_schema");}function
error(){global$g;return
h(preg_replace('~^You have an error.*syntax to use~U',"Syntax error",$g->error));}function
error_line(){global$g;if(preg_match('~ at line ([0-9]+)$~',$g->error,$Nf))return$Nf[1]-1;}function
create_database($k,$d){set_session("dbs",null);return
queries("CREATE DATABASE ".idf_escape($k).($d?" COLLATE ".q($d):""));}function
drop_databases($j){restart_session();set_session("dbs",null);return
apply_queries("DROP DATABASE",$j,'idf_escape');}function
rename_database($C,$d){if(create_database($C,$d)){$Pf=array();foreach(tables_list()as$Q=>$U)$Pf[]=table($Q)." TO ".idf_escape($C).".".table($Q);if(!$Pf||queries("RENAME TABLE ".implode(", ",$Pf))){queries("DROP DATABASE ".idf_escape(DB));return
true;}}return
false;}function
auto_increment(){$Ka=" PRIMARY KEY";if($_GET["create"]!=""&&$_POST["auto_increment_col"]){foreach(indexes($_GET["create"])as$u){if(in_array($_POST["fields"][$_POST["auto_increment_col"]]["orig"],$u["columns"],true)){$Ka="";break;}if($u["type"]=="PRIMARY")$Ka=" UNIQUE";}}return" AUTO_INCREMENT$Ka";}function
alter_table($Q,$C,$o,$Ic,$mb,$ic,$d,$Ja,$df){$c=array();foreach($o
as$n)$c[]=($n[1]?($Q!=""?($n[0]!=""?"CHANGE ".idf_escape($n[0]):"ADD"):" ")." ".implode($n[1]).($Q!=""?$n[2]:""):"DROP ".idf_escape($n[0]));$c=array_merge($c,$Ic);$xg="COMMENT=".q($mb).($ic?" ENGINE=".q($ic):"").($d?" COLLATE ".q($d):"").($Ja!=""?" AUTO_INCREMENT=$Ja":"").$df;if($Q=="")return
queries("CREATE TABLE ".table($C)." (\n".implode(",\n",$c)."\n) $xg");if($Q!=$C)$c[]="RENAME TO ".table($C);$c[]=$xg;return
queries("ALTER TABLE ".table($Q)."\n".implode(",\n",$c));}function
alter_indexes($Q,$c){foreach($c
as$x=>$X)$c[$x]=($X[2]=="DROP"?"\nDROP INDEX ".idf_escape($X[1]):"\nADD $X[0] ".($X[0]=="PRIMARY"?"KEY ":"").($X[1]!=""?idf_escape($X[1])." ":"")."(".implode(", ",$X[2]).")");return
queries("ALTER TABLE ".table($Q).implode(",",$c));}function
truncate_tables($S){return
apply_queries("TRUNCATE TABLE",$S);}function
drop_views($Mh){return
queries("DROP VIEW ".implode(", ",array_map('table',$Mh)));}function
drop_tables($S){return
queries("DROP TABLE ".implode(", ",array_map('table',$S)));}function
move_tables($S,$Mh,$Pg){$Pf=array();foreach(array_merge($S,$Mh)as$Q)$Pf[]=table($Q)." TO ".idf_escape($Pg).".".table($Q);return
queries("RENAME TABLE ".implode(", ",$Pf));}function
copy_tables($S,$Mh,$Pg){queries("SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO'");foreach($S
as$Q){$C=($Pg==DB?table("copy_$Q"):idf_escape($Pg).".".table($Q));if(!queries("DROP TABLE IF EXISTS $C")||!queries("CREATE TABLE $C LIKE ".table($Q))||!queries("INSERT INTO $C SELECT * FROM ".table($Q)))return
false;}foreach($Mh
as$Q){$C=($Pg==DB?table("copy_$Q"):idf_escape($Pg).".".table($Q));$Lh=view($Q);if(!queries("DROP VIEW IF EXISTS $C")||!queries("CREATE VIEW $C AS $Lh[select]"))return
false;}return
true;}function
trigger($C){if($C=="")return
array();$L=get_rows("SHOW TRIGGERS WHERE `Trigger` = ".q($C));return
reset($L);}function
triggers($Q){$J=array();foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($Q,"%_\\")))as$K)$J[$K["Trigger"]]=array($K["Timing"],$K["Event"]);return$J;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Type"=>array("FOR EACH ROW"),);}function
routine($C,$U){global$g,$kc,$qd,$rh;$Aa=array("bool","boolean","integer","double precision","real","dec","numeric","fixed","national char","national varchar");$qh="((".implode("|",array_merge(array_keys($rh),$Aa)).")\\b(?:\\s*\\(((?:[^'\")]*|$kc)++)\\))?\\s*(zerofill\\s*)?(unsigned(?:\\s+zerofill)?)?)(?:\\s*(?:CHARSET|CHARACTER\\s+SET)\\s*['\"]?([^'\"\\s]+)['\"]?)?";$if="\\s*(".($U=="FUNCTION"?"":$qd).")?\\s*(?:`((?:[^`]|``)*)`\\s*|\\b(\\S+)\\s+)$qh";$xb=$g->result("SHOW CREATE $U ".idf_escape($C),2);preg_match("~\\(((?:$if\\s*,?)*)\\)\\s*".($U=="FUNCTION"?"RETURNS\\s+$qh\\s+":"")."(.*)~is",$xb,$B);$o=array();preg_match_all("~$if\\s*,?~is",$B[1],$Wd,PREG_SET_ORDER);foreach($Wd
as$Ye){$C=str_replace("``","`",$Ye[2]).$Ye[3];$o[]=array("field"=>$C,"type"=>strtolower($Ye[5]),"length"=>preg_replace_callback("~$kc~s",'normalize_enum',$Ye[6]),"unsigned"=>strtolower(preg_replace('~\\s+~',' ',trim("$Ye[8] $Ye[7]"))),"null"=>1,"full_type"=>$Ye[4],"inout"=>strtoupper($Ye[1]),"collation"=>strtolower($Ye[9]),);}if($U!="FUNCTION")return
array("fields"=>$o,"definition"=>$B[11]);return
array("fields"=>$o,"returns"=>array("type"=>$B[12],"length"=>$B[13],"unsigned"=>$B[15],"collation"=>$B[16]),"definition"=>$B[17],"language"=>"SQL",);}function
routines(){return
get_rows("SELECT ROUTINE_NAME, ROUTINE_TYPE, DTD_IDENTIFIER FROM information_schema.ROUTINES WHERE ROUTINE_SCHEMA = ".q(DB));}function
routine_languages(){return
array();}function
last_id(){global$g;return$g->result("SELECT LAST_INSERT_ID()");}function
explain($g,$H){return$g->query("EXPLAIN ".($g->server_info>=5.1?"PARTITIONS ":"").$H);}function
found_rows($R,$Z){return($Z||$R["Engine"]!="InnoDB"?null:$R["Rows"]);}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($dg){return
true;}function
create_sql($Q,$Ja){global$g;$J=$g->result("SHOW CREATE TABLE ".table($Q),1);if(!$Ja)$J=preg_replace('~ AUTO_INCREMENT=\\d+~','',$J);return$J;}function
truncate_sql($Q){return"TRUNCATE ".table($Q);}function
use_sql($Cb){return"USE ".idf_escape($Cb);}function
trigger_sql($Q,$Ag){$J="";foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($Q,"%_\\")),null,"-- ")as$K)$J.="\n".($Ag=='CREATE+ALTER'?"DROP TRIGGER IF EXISTS ".idf_escape($K["Trigger"]).";;\n":"")."CREATE TRIGGER ".idf_escape($K["Trigger"])." $K[Timing] $K[Event] ON ".table($K["Table"])." FOR EACH ROW\n$K[Statement];;\n";return$J;}function
show_variables(){return
get_key_vals("SHOW VARIABLES");}function
process_list(){return
get_rows("SHOW FULL PROCESSLIST");}function
show_status(){return
get_key_vals("SHOW STATUS");}function
convert_field($n){if(preg_match("~binary~",$n["type"]))return"HEX(".idf_escape($n["field"]).")";if($n["type"]=="bit")return"BIN(".idf_escape($n["field"])." + 0)";if(preg_match("~geometry|point|linestring|polygon~",$n["type"]))return"AsWKT(".idf_escape($n["field"]).")";}function
unconvert_field($n,$J){if(preg_match("~binary~",$n["type"]))$J="UNHEX($J)";if($n["type"]=="bit")$J="CONV($J, 2, 10) + 0";if(preg_match("~geometry|point|linestring|polygon~",$n["type"]))$J="GeomFromText($J)";return$J;}function
support($Bc){global$g;return!preg_match("~scheme|sequence|type|view_trigger".($g->server_info<5.1?"|event|partitioning".($g->server_info<5?"|routine|trigger|view":""):"")."~",$Bc);}$w="sql";$rh=array();$_g=array();foreach(array('Numbers'=>array("tinyint"=>3,"smallint"=>5,"mediumint"=>8,"int"=>10,"bigint"=>20,"decimal"=>66,"float"=>12,"double"=>21),'Date and time'=>array("date"=>10,"datetime"=>19,"timestamp"=>19,"time"=>10,"year"=>4),'Strings'=>array("char"=>255,"varchar"=>65535,"tinytext"=>255,"text"=>65535,"mediumtext"=>16777215,"longtext"=>4294967295),'Lists'=>array("enum"=>65535,"set"=>64),'Binary'=>array("bit"=>20,"binary"=>255,"varbinary"=>65535,"tinyblob"=>255,"blob"=>65535,"mediumblob"=>16777215,"longblob"=>4294967295),'Geometry'=>array("geometry"=>0,"point"=>0,"linestring"=>0,"polygon"=>0,"multipoint"=>0,"multilinestring"=>0,"multipolygon"=>0,"geometrycollection"=>0),)as$x=>$X){$rh+=$X;$_g[$x]=array_keys($X);}$yh=array("unsigned","zerofill","unsigned zerofill");$He=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","REGEXP","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","SQL");$Rc=array("char_length","date","from_unixtime","lower","round","sec_to_time","time_to_sec","upper");$Wc=array("avg","count","count distinct","group_concat","max","min","sum");$ac=array(array("char"=>"md5/sha1/password/encrypt/uuid","binary"=>"md5/sha1","date|time"=>"now",),array("(^|[^o])int|float|double|decimal"=>"+/-","date"=>"+ interval/- interval","time"=>"addtime/subtime","char|text"=>"concat",));}define("SERVER",$_GET[DRIVER]);define("DB",$_GET["db"]);define("ME",preg_replace('~^[^?]*/([^?]*).*~','\\1',$_SERVER["REQUEST_URI"]).'?'.(sid()?SID.'&':'').(SERVER!==null?DRIVER."=".urlencode(SERVER).'&':'').(isset($_GET["username"])?"username=".urlencode($_GET["username"]).'&':'').(DB!=""?'db='.urlencode(DB).'&'.(isset($_GET["ns"])?"ns=".urlencode($_GET["ns"])."&":""):''));$ia="4.0.3";class
Adminer{var$operators;function
name(){return"<a href='http://www.adminer.org/' target='_blank' id='h1'>Adminer</a>";}function
credentials(){return
array(SERVER,$_GET["username"],get_password());}function
permanentLogin($xb=false){return
password_file($xb);}function
database(){return
DB;}function
databases($Hc=true){return
get_databases($Hc);}function
schemas(){return
schemas();}function
queryTimeout(){return
5;}function
headers(){return
true;}function
head(){return
true;}function
loginForm(){global$Sb;echo'<table cellspacing="0">
<tr><th>System<td>',html_select("auth[driver]",$Sb,DRIVER,"loginDriver(this);"),'<tr><th>Server<td><input name="auth[server]" value="',h(SERVER),'" title="hostname[:port]" placeholder="localhost" autocapitalize="off">
<tr><th>Username<td><input name="auth[username]" id="username" value="',h($_GET["username"]),'" autocapitalize="off">
<tr><th>Password<td><input type="password" name="auth[password]">
<tr><th>Database<td><input name="auth[db]" value="',h($_GET["db"]);?>" autocapitalize="off">
</table>
<script type="text/javascript">
var username = document.getElementById('username');
focus(username);
username.form['auth[driver]'].onchange();
</script>
<?php

echo"<p><input type='submit' value='".'Login'."'>\n",checkbox("auth[permanent]",1,$_COOKIE["adminer_permanent"],'Permanent login')."\n";}function
login($Sd,$G){return
true;}function
tableName($Gg){return
h($Gg["Name"]);}function
fieldName($n,$Me=0){return'<span title="'.h($n["full_type"]).'">'.h($n["field"]).'</span>';}function
selectLinks($Gg,$O=""){echo'<p class="links">';$Rd=array("select"=>'Select data');if(support("table")||support("indexes"))$Rd["table"]='Show structure';if(support("table")){if(is_view($Gg))$Rd["view"]='Alter view';else$Rd["create"]='Alter table';}if($O!==null)$Rd["edit"]='New item';foreach($Rd
as$x=>$X)echo" <a href='".h(ME)."$x=".urlencode($Gg["Name"]).($x=="edit"?$O:"")."'".bold(isset($_GET[$x])).">$X</a>";echo"\n";}function
foreignKeys($Q){return
foreign_keys($Q);}function
backwardKeys($Q,$Fg){return
array();}function
backwardKeysPrint($Ma,$K){}function
selectQuery($H){global$w;return"<p><code class='jush-$w'>".h(str_replace("\n"," ",$H))."</code>".(support("sql")?" <a href='".h(ME)."sql=".urlencode($H)."'>".'Edit'."</a>":"")."</p>";}function
rowDescription($Q){return"";}function
rowDescriptions($L,$Jc){return$L;}function
selectLink($X,$n){}function
selectVal($X,$_,$n,$Te){$J=($X===null?"<i>NULL</i>":(preg_match("~char|binary~",$n["type"])&&!preg_match("~var~",$n["type"])?"<code>$X</code>":$X));if(preg_match('~blob|bytea|raw|file~',$n["type"])&&!is_utf8($X))$J=lang(array('%d byte','%d bytes'),strlen($Te));return($_?"<a href='".h($_)."'>$J</a>":$J);}function
editVal($X,$n){return$X;}function
selectColumnsPrint($M,$f){global$Rc,$Wc;print_fieldset("select",'Select',$M);$r=0;$M[""]=array();foreach($M
as$x=>$X){$X=$_GET["columns"][$x];$e=select_input(" name='columns[$r][col]' onchange='".($x!==""?"selectFieldChange(this.form)":"selectAddRow(this)").";'",$f,$X["col"]);echo"<div>".($Rc||$Wc?"<select name='columns[$r][fun]' onchange='helpClose();".($x!==""?"":" this.nextSibling.nextSibling.onchange();")."'".on_help("getTarget(event).value && getTarget(event).value.replace(/ |\$/, '(') + ')'",1).">".optionlist(array(-1=>"")+array_filter(array('Functions'=>$Rc,'Aggregation'=>$Wc)),$X["fun"])."</select>"."($e)":$e)."</div>\n";$r++;}echo"</div></fieldset>\n";}function
selectSearchPrint($Z,$f,$v){print_fieldset("search",'Search',$Z);foreach($v
as$r=>$u){if($u["type"]=="FULLTEXT"){echo"(<i>".implode("</i>, <i>",array_map('h',$u["columns"]))."</i>) AGAINST"," <input type='search' name='fulltext[$r]' value='".h($_GET["fulltext"][$r])."' onchange='selectFieldChange(this.form);'>",checkbox("boolean[$r]",1,isset($_GET["boolean"][$r]),"BOOL"),"<br>\n";}}$_GET["where"]=(array)$_GET["where"];reset($_GET["where"]);$Xa="this.nextSibling.onchange();";for($r=0;$r<=count($_GET["where"]);$r++){list(,$X)=each($_GET["where"]);if(!$X||("$X[col]$X[val]"!=""&&in_array($X["op"],$this->operators))){echo"<div>".select_input(" name='where[$r][col]' onchange='$Xa'",$f,$X["col"],"(".'anywhere'.")"),html_select("where[$r][op]",$this->operators,$X["op"],$Xa),"<input type='search' name='where[$r][val]' value='".h($X["val"])."' onchange='".($X?"selectFieldChange(this.form)":"selectAddRow(this)").";' onkeydown='selectSearchKeydown(this, event);' onsearch='selectSearchSearch(this);'></div>\n";}}echo"</div></fieldset>\n";}function
selectOrderPrint($Me,$f,$v){print_fieldset("sort",'Sort',$Me);$r=0;foreach((array)$_GET["order"]as$x=>$X){if($X!=""){echo"<div>".select_input(" name='order[$r]' onchange='selectFieldChange(this.form);'",$f,$X),checkbox("desc[$r]",1,isset($_GET["desc"][$x]),'descending')."</div>\n";$r++;}}echo"<div>".select_input(" name='order[$r]' onchange='selectAddRow(this);'",$f),checkbox("desc[$r]",1,false,'descending')."</div>\n","</div></fieldset>\n";}function
selectLimitPrint($z){echo"<fieldset><legend>".'Limit'."</legend><div>";echo"<input type='number' name='limit' class='size' value='".h($z)."' onchange='selectFieldChange(this.form);'>","</div></fieldset>\n";}function
selectLengthPrint($Vg){if($Vg!==null){echo"<fieldset><legend>".'Text length'."</legend><div>","<input type='number' name='text_length' class='size' value='".h($Vg)."'>","</div></fieldset>\n";}}function
selectActionPrint($v){echo"<fieldset><legend>".'Action'."</legend><div>","<input type='submit' value='".'Select'."'>"," <span id='noindex' title='".'Full table scan'."'></span>","<script type='text/javascript'>\n","var indexColumns = ";$f=array();foreach($v
as$u){if($u["type"]!="FULLTEXT")$f[reset($u["columns"])]=1;}$f[""]=1;foreach($f
as$x=>$X)json_row($x);echo";\n","selectFieldChange(document.getElementById('form'));\n","</script>\n","</div></fieldset>\n";}function
selectCommandPrint(){return!information_schema(DB);}function
selectImportPrint(){return!information_schema(DB);}function
selectEmailPrint($ec,$f){}function
selectColumnsProcess($f,$v){global$Rc,$Wc;$M=array();$Uc=array();foreach((array)$_GET["columns"]as$x=>$X){if($X["fun"]=="count"||($X["col"]!=""&&(!$X["fun"]||in_array($X["fun"],$Rc)||in_array($X["fun"],$Wc)))){$M[$x]=apply_sql_function($X["fun"],($X["col"]!=""?idf_escape($X["col"]):"*"));if(!in_array($X["fun"],$Wc))$Uc[]=$M[$x];}}return
array($M,$Uc);}function
selectSearchProcess($o,$v){global$w;$J=array();foreach($v
as$r=>$u){if($u["type"]=="FULLTEXT"&&$_GET["fulltext"][$r]!="")$J[]="MATCH (".implode(", ",array_map('idf_escape',$u["columns"])).") AGAINST (".q($_GET["fulltext"][$r]).(isset($_GET["boolean"][$r])?" IN BOOLEAN MODE":"").")";}foreach((array)$_GET["where"]as$X){if("$X[col]$X[val]"!=""&&in_array($X["op"],$this->operators)){$ob=" $X[op]";if(preg_match('~IN$~',$X["op"])){$jd=process_length($X["val"]);$ob.=" ".($jd!=""?$jd:"(NULL)");}elseif($X["op"]=="SQL")$ob=" $X[val]";elseif($X["op"]=="LIKE %%")$ob=" LIKE ".$this->processInput($o[$X["col"]],"%$X[val]%");elseif(!preg_match('~NULL$~',$X["op"]))$ob.=" ".$this->processInput($o[$X["col"]],$X["val"]);if($X["col"]!="")$J[]=idf_escape($X["col"]).$ob;else{$jb=array();foreach($o
as$C=>$n){$wd=preg_match('~char|text|enum|set~',$n["type"]);if((is_numeric($X["val"])||!preg_match('~(^|[^o])int|float|double|decimal|bit~',$n["type"]))&&(!preg_match("~[\x80-\xFF]~",$X["val"])||$wd)){$C=idf_escape($C);$jb[]=($w=="sql"&&$wd&&!preg_match('~^utf8~',$n["collation"])?"CONVERT($C USING utf8)":$C);}}$J[]=($jb?"(".implode("$ob OR ",$jb)."$ob)":"0");}}}return$J;}function
selectOrderProcess($o,$v){$J=array();foreach((array)$_GET["order"]as$x=>$X){if($X!="")$J[]=(preg_match('~^((COUNT\\(DISTINCT |[A-Z0-9_]+\\()(`(?:[^`]|``)+`|"(?:[^"]|"")+")\\)|COUNT\\(\\*\\))$~',$X)?$X:idf_escape($X)).(isset($_GET["desc"][$x])?" DESC":"");}return$J;}function
selectLimitProcess(){return(isset($_GET["limit"])?$_GET["limit"]:"50");}function
selectLengthProcess(){return(isset($_GET["text_length"])?$_GET["text_length"]:"100");}function
selectEmailProcess($Z,$Jc){return
false;}function
selectQueryBuild($M,$Z,$Uc,$Me,$z,$E){return"";}function
messageQuery($H){global$w;restart_session();$bd=&get_session("queries");$s="sql-".count($bd[$_GET["db"]]);if(strlen($H)>1e6)$H=preg_replace('~[\x80-\xFF]+$~','',substr($H,0,1e6))."\n...";$bd[$_GET["db"]][]=array($H,time());return" <span class='time'>".@date("H:i:s")."</span> <a href='#$s' onclick=\"return !toggle('$s');\">".'SQL command'."</a>"."<div id='$s' class='hidden'><pre><code class='jush-$w'>".shorten_utf8($H,1000).'</code></pre>'.(support("sql")?'<p><a href="'.h(str_replace("db=".urlencode(DB),"db=".urlencode($_GET["db"]),ME).'sql=&history='.(count($bd[$_GET["db"]])-1)).'">'.'Edit'.'</a>':'').'</div>';}function
editFunctions($n){global$ac;$J=($n["null"]?"NULL/":"");foreach($ac
as$x=>$Rc){if(!$x||(!isset($_GET["call"])&&(isset($_GET["select"])||where($_GET)))){foreach($Rc
as$if=>$X){if(!$if||preg_match("~$if~",$n["type"]))$J.="/$X";}if($x&&!preg_match('~set|blob|bytea|raw|file~',$n["type"]))$J.="/SQL";}}if($n["auto_increment"]&&!isset($_GET["select"])&&!where($_GET))$J='Auto Increment';return
explode("/",$J);}function
editInput($Q,$n,$Ha,$Y){if($n["type"]=="enum")return(isset($_GET["select"])?"<label><input type='radio'$Ha value='-1' checked><i>".'original'."</i></label> ":"").($n["null"]?"<label><input type='radio'$Ha value=''".($Y!==null||isset($_GET["select"])?"":" checked")."><i>NULL</i></label> ":"").enum_input("radio",$Ha,$n,$Y,0);return"";}function
processInput($n,$Y,$q=""){if($q=="SQL")return$Y;$C=$n["field"];$J=q($Y);if(preg_match('~^(now|getdate|uuid)$~',$q))$J="$q()";elseif(preg_match('~^current_(date|timestamp)$~',$q))$J=$q;elseif(preg_match('~^([+-]|\\|\\|)$~',$q))$J=idf_escape($C)." $q $J";elseif(preg_match('~^[+-] interval$~',$q))$J=idf_escape($C)." $q ".(preg_match("~^(\\d+|'[0-9.: -]') [A-Z_]+$~i",$Y)?$Y:$J);elseif(preg_match('~^(addtime|subtime|concat)$~',$q))$J="$q(".idf_escape($C).", $J)";elseif(preg_match('~^(md5|sha1|password|encrypt)$~',$q))$J="$q($J)";return
unconvert_field($n,$J);}function
dumpOutput(){$J=array('text'=>'open','file'=>'save');if(function_exists('gzencode'))$J['gz']='gzip';return$J;}function
dumpFormat(){return
array('sql'=>'SQL','csv'=>'CSV,','csv;'=>'CSV;','tsv'=>'TSV');}function
dumpDatabase($k){}function
dumpTable($Q,$Ag,$xd=0){if($_POST["format"]!="sql"){echo"\xef\xbb\xbf";if($Ag)dump_csv(array_keys(fields($Q)));}elseif($Ag){if($xd==2){$o=array();foreach(fields($Q)as$C=>$n)$o[]=idf_escape($C)." $n[full_type]";$xb="CREATE TABLE ".table($Q)." (".implode(", ",$o).")";}else$xb=create_sql($Q,$_POST["auto_increment"]);if($xb){if($Ag=="DROP+CREATE"||$xd==1)echo"DROP ".($xd==2?"VIEW":"TABLE")." IF EXISTS ".table($Q).";\n";if($xd==1)$xb=remove_definer($xb);echo"$xb;\n\n";}}}function
dumpData($Q,$Ag,$H){global$g,$w;$Yd=($w=="sqlite"?0:1048576);if($Ag){if($_POST["format"]=="sql"){if($Ag=="TRUNCATE+INSERT")echo
truncate_sql($Q).";\n";$o=fields($Q);}$I=$g->query($H,1);if($I){$sd="";$Va="";$Dd=array();$Cg="";$Cc=($Q!=''?'fetch_assoc':'fetch_row');while($K=$I->$Cc()){if(!$Dd){$Hh=array();foreach($K
as$X){$n=$I->fetch_field();$Dd[]=$n->name;$x=idf_escape($n->name);$Hh[]="$x = VALUES($x)";}$Cg=($Ag=="INSERT+UPDATE"?"\nON DUPLICATE KEY UPDATE ".implode(", ",$Hh):"").";\n";}if($_POST["format"]!="sql"){if($Ag=="table"){dump_csv($Dd);$Ag="INSERT";}dump_csv($K);}else{if(!$sd)$sd="INSERT INTO ".table($Q)." (".implode(", ",array_map('idf_escape',$Dd)).") VALUES";foreach($K
as$x=>$X){$n=$o[$x];$K[$x]=($X!==null?unconvert_field($n,preg_match('~(^|[^o])int|float|double|decimal~',$n["type"])&&$X!=''?$X:q($X)):"NULL");}$bg=($Yd?"\n":" ")."(".implode(",\t",$K).")";if(!$Va)$Va=$sd.$bg;elseif(strlen($Va)+4+strlen($bg)+strlen($Cg)<$Yd)$Va.=",$bg";else{echo$Va.$Cg;$Va=$sd.$bg;}}}if($Va)echo$Va.$Cg;}elseif($_POST["format"]=="sql")echo"-- ".str_replace("\n"," ",$g->error)."\n";}}function
dumpFilename($gd){return
friendly_url($gd!=""?$gd:(SERVER!=""?SERVER:"localhost"));}function
dumpHeaders($gd,$ne=false){$We=$_POST["output"];$xc=(preg_match('~sql~',$_POST["format"])?"sql":($ne?"tar":"csv"));header("Content-Type: ".($We=="gz"?"application/x-gzip":($xc=="tar"?"application/x-tar":($xc=="sql"||$We!="file"?"text/plain":"text/csv")."; charset=utf-8")));if($We=="gz")ob_start('gzencode',1e6);return$xc;}function
homepage(){echo'<p class="links">'.($_GET["ns"]==""&&support("database")?'<a href="'.h(ME).'database=">'.'Alter database'."</a>\n":""),(support("scheme")?"<a href='".h(ME)."scheme='>".($_GET["ns"]!=""?'Alter schema':'Create schema')."</a>\n":""),($_GET["ns"]!==""?'<a href="'.h(ME).'schema=">'.'Database schema'."</a>\n":""),(support("privileges")?"<a href='".h(ME)."privileges='>".'Privileges'."</a>\n":"");return
true;}function
navigation($me){global$ia,$w,$Sb,$g;echo'<h1>
',$this->name(),' <span class="version">',$ia,'</span>
<a href="http://www.adminer.org/#download" target="_blank" id="version">',(version_compare($ia,$_COOKIE["adminer_version"])<0?h($_COOKIE["adminer_version"]):""),'</a>
</h1>
';if($me=="auth"){$Gc=true;foreach((array)$_SESSION["pwds"]as$Jh=>$ng){foreach($ng
as$N=>$Eh){foreach($Eh
as$V=>$G){if($G!==null){if($Gc){echo"<p id='logins' onmouseover='menuOver(this, event);' onmouseout='menuOut(this);'>\n";$Gc=false;}$Fb=$_SESSION["db"][$Jh][$N][$V];foreach(($Fb?array_keys($Fb):array(""))as$k)echo"<a href='".h(auth_url($Jh,$N,$V,$k))."'>($Sb[$Jh]) ".h($V.($N!=""?"@$N":"").($k!=""?" - $k":""))."</a><br>\n";}}}}}else{if($_GET["ns"]!==""&&!$me&&DB!=""){$g->select_db(DB);$S=table_status('',true);}if(support("sql")){echo'<script type="text/javascript" src="',h(preg_replace("~\\?.*~","",ME))."?file=jush.js&amp;version=4.0.3",'"></script>
<script type="text/javascript">
';if($S){$Rd=array();foreach($S
as$Q=>$U)$Rd[]=preg_quote($Q,'/');echo"var jushLinks = { $w: [ '".js_escape(ME).(support("table")?"table=":"select=")."\$&', /\\b(".implode("|",$Rd).")\\b/g ] };\n";foreach(array("bac","bra","sqlite_quo","mssql_bra")as$X)echo"jushLinks.$X = jushLinks.$w;\n";}echo'bodyLoad(\'',(is_object($g)?substr($g->server_info,0,3):""),'\');
</script>
';}$this->databasesPrint($me);if(DB==""||!$me){echo"<p class='links'>".(support("sql")?"<a href='".h(ME)."sql='".bold(isset($_GET["sql"])&&!isset($_GET["import"])).">".'SQL command'."</a>\n<a href='".h(ME)."import='".bold(isset($_GET["import"])).">".'Import'."</a>\n":"")."";if(support("dump"))echo"<a href='".h(ME)."dump=".urlencode(isset($_GET["table"])?$_GET["table"]:$_GET["select"])."' id='dump'".bold(isset($_GET["dump"])).">".'Dump'."</a>\n";}if($_GET["ns"]!==""&&!$me&&DB!=""){echo'<a href="'.h(ME).'create="'.bold($_GET["create"]==="").">".'Create table'."</a>\n";if(!$S)echo"<p class='message'>".'No tables.'."\n";else$this->tablesPrint($S);}}}function
databasesPrint($me){global$b,$g;$j=$this->databases();echo'<form action="">
<p id="dbs">
';hidden_fields_get();$Db=" onmousedown='dbMouseDown(event, this);' onchange='dbChange(this);'";echo"<span title='".'database'."'>DB</span>: ".($j?"<select name='db'$Db>".optionlist(array(""=>"")+$j,DB)."</select>":'<input name="db" value="'.h(DB).'" autocapitalize="off">'),"<input type='submit' value='".'Use'."'".($j?" class='hidden'":"").">\n";if($me!="db"&&DB!=""&&$g->select_db(DB)){if(support("scheme")){echo"<br><select name='ns'$Db>".optionlist(array(""=>"(".'schema'.")")+$b->schemas(),$_GET["ns"])."</select>";if($_GET["ns"]!="")set_schema($_GET["ns"]);}}echo(isset($_GET["sql"])?'<input type="hidden" name="sql" value="">':(isset($_GET["schema"])?'<input type="hidden" name="schema" value="">':(isset($_GET["dump"])?'<input type="hidden" name="dump" value="">':(isset($_GET["privileges"])?'<input type="hidden" name="privileges" value="">':"")))),"</p></form>\n";}function
tablesPrint($S){echo"<p id='tables' onmouseover='menuOver(this, event);' onmouseout='menuOut(this);'>\n";foreach($S
as$Q=>$xg){echo'<a href="'.h(ME).'select='.urlencode($Q).'"'.bold($_GET["select"]==$Q||$_GET["edit"]==$Q).">".'select'."</a> ";$C=$this->tableName($xg);echo(support("table")||support("indexes")?'<a href="'.h(ME).'table='.urlencode($Q).'"'.bold(in_array($Q,array($_GET["table"],$_GET["create"],$_GET["indexes"],$_GET["foreign"],$_GET["trigger"])),(is_view($xg)?"view":""))." title='".'Show structure'."'>$C</a>":"<span>$C</span>")."<br>\n";}}}$b=(function_exists('adminer_object')?adminer_object():new
Adminer);if($b->operators===null)$b->operators=$He;function
page_header($Zg,$m="",$Ua=array(),$ah=""){global$ca,$ia,$b,$Sb,$w;page_headers();$bh=$Zg.($ah!=""?": $ah":"");$ch=strip_tags($bh.(SERVER!=""&&SERVER!="localhost"?h(" - ".SERVER):"")." - ".$b->name());echo'<!DOCTYPE html>
<html lang="en" dir="ltr">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta name="robots" content="noindex">
<title>',$ch,'</title>
<link rel="stylesheet" type="text/css" href="',h(preg_replace("~\\?.*~","",ME))."?file=default.css&amp;version=4.0.3",'">
<script type="text/javascript" src="',h(preg_replace("~\\?.*~","",ME))."?file=functions.js&amp;version=4.0.3",'"></script>
';if($b->head()){echo'<link rel="shortcut icon" type="image/x-icon" href="',h(preg_replace("~\\?.*~","",ME))."?file=favicon.ico&amp;version=4.0.3",'">
<link rel="apple-touch-icon" href="',h(preg_replace("~\\?.*~","",ME))."?file=favicon.ico&amp;version=4.0.3",'">
';if(file_exists("adminer.css")){echo'<link rel="stylesheet" type="text/css" href="adminer.css">
';}}echo'
<body class="ltr nojs" onkeydown="bodyKeydown(event);" onclick="bodyClick(event);"',(isset($_COOKIE["adminer_version"])?"":" onload=\"verifyVersion('$ia');\""),'>
<script type="text/javascript">
document.body.className = document.body.className.replace(/ nojs/, \' js\');
</script>

<div id="help" class="jush-',$w,' jsonly hidden" onmouseover="helpOpen = 1;" onmouseout="helpMouseout(this, event);"></div>

<div id="content">
';if($Ua!==null){$_=substr(preg_replace('~\b(username|db|ns)=[^&]*&~','',ME),0,-1);echo'<p id="breadcrumb"><a href="'.h($_?$_:".").'">'.$Sb[DRIVER].'</a> &raquo; ';$_=substr(preg_replace('~\b(db|ns)=[^&]*&~','',ME),0,-1);$N=(SERVER!=""?h(SERVER):'Server');if($Ua===false)echo"$N\n";else{echo"<a href='".($_?h($_):".")."' accesskey='1' title='Alt+Shift+1'>$N</a> &raquo; ";if($_GET["ns"]!=""||(DB!=""&&is_array($Ua)))echo'<a href="'.h($_."&db=".urlencode(DB).(support("scheme")?"&ns=":"")).'">'.h(DB).'</a> &raquo; ';if(is_array($Ua)){if($_GET["ns"]!="")echo'<a href="'.h(substr(ME,0,-1)).'">'.h($_GET["ns"]).'</a> &raquo; ';foreach($Ua
as$x=>$X){$Kb=(is_array($X)?$X[1]:h($X));if($Kb!="")echo"<a href='".h(ME."$x=").urlencode(is_array($X)?$X[0]:$X)."'>$Kb</a> &raquo; ";}}echo"$Zg\n";}}echo"<h2>$bh</h2>\n";restart_session();page_messages($m);$j=&get_session("dbs");if(DB!=""&&$j&&!in_array(DB,$j,true))$j=null;stop_session();define("PAGE_HEADER",1);}function
page_headers(){global$b;header("Content-Type: text/html; charset=utf-8");header("Cache-Control: no-cache");if($b->headers()){header("X-Frame-Options: deny");header("X-XSS-Protection: 0");}}function
page_messages($m){$_h=preg_replace('~^[^?]*~','',$_SERVER["REQUEST_URI"]);$ie=$_SESSION["messages"][$_h];if($ie){echo"<div class='message'>".implode("</div>\n<div class='message'>",$ie)."</div>\n";unset($_SESSION["messages"][$_h]);}if($m)echo"<div class='error'>$m</div>\n";}function
page_footer($me=""){global$b,$T;echo'</div>

';if($me!="auth"){echo'<form action="" method="post">
<p class="logout">
<input type="submit" name="logout" value="Logout" id="logout">
<input type="hidden" name="token" value="',$T,'">
</p>
</form>
';}echo'<div id="menu">
';$b->navigation($me);echo'</div>
<script type="text/javascript">setupSubmitHighlight(document);</script>
';}function
int32($pe){while($pe>=2147483648)$pe-=4294967296;while($pe<=-2147483649)$pe+=4294967296;return(int)$pe;}function
long2str($W,$Oh){$bg='';foreach($W
as$X)$bg.=pack('V',$X);if($Oh)return
substr($bg,0,end($W));return$bg;}function
str2long($bg,$Oh){$W=array_values(unpack('V*',str_pad($bg,4*ceil(strlen($bg)/4),"\0")));if($Oh)$W[]=strlen($bg);return$W;}function
xxtea_mx($Uh,$Th,$Dg,$_d){return
int32((($Uh>>5&0x7FFFFFF)^$Th<<2)+(($Th>>3&0x1FFFFFFF)^$Uh<<4))^int32(($Dg^$Th)+($_d^$Uh));}function
encrypt_string($zg,$x){if($zg=="")return"";$x=array_values(unpack("V*",pack("H*",md5($x))));$W=str2long($zg,true);$pe=count($W)-1;$Uh=$W[$pe];$Th=$W[0];$Af=floor(6+52/($pe+1));$Dg=0;while($Af-->0){$Dg=int32($Dg+0x9E3779B9);$Zb=$Dg>>2&3;for($Xe=0;$Xe<$pe;$Xe++){$Th=$W[$Xe+1];$oe=xxtea_mx($Uh,$Th,$Dg,$x[$Xe&3^$Zb]);$Uh=int32($W[$Xe]+$oe);$W[$Xe]=$Uh;}$Th=$W[0];$oe=xxtea_mx($Uh,$Th,$Dg,$x[$Xe&3^$Zb]);$Uh=int32($W[$pe]+$oe);$W[$pe]=$Uh;}return
long2str($W,false);}function
decrypt_string($zg,$x){if($zg=="")return"";if(!$x)return
false;$x=array_values(unpack("V*",pack("H*",md5($x))));$W=str2long($zg,false);$pe=count($W)-1;$Uh=$W[$pe];$Th=$W[0];$Af=floor(6+52/($pe+1));$Dg=int32($Af*0x9E3779B9);while($Dg){$Zb=$Dg>>2&3;for($Xe=$pe;$Xe>0;$Xe--){$Uh=$W[$Xe-1];$oe=xxtea_mx($Uh,$Th,$Dg,$x[$Xe&3^$Zb]);$Th=int32($W[$Xe]-$oe);$W[$Xe]=$Th;}$Uh=$W[$pe];$oe=xxtea_mx($Uh,$Th,$Dg,$x[$Xe&3^$Zb]);$Th=int32($W[0]-$oe);$W[0]=$Th;$Dg=int32($Dg-0x9E3779B9);}return
long2str($W,true);}$g='';$ad=$_SESSION["token"];if(!$ad)$_SESSION["token"]=rand(1,1e6);$T=get_token();$jf=array();if($_COOKIE["adminer_permanent"]){foreach(explode(" ",$_COOKIE["adminer_permanent"])as$X){list($x)=explode(":",$X);$jf[$x]=$X;}}$Ia=$_POST["auth"];if($Ia){session_regenerate_id();$l=$Ia["driver"];$N=$Ia["server"];$V=$Ia["username"];$G=$Ia["password"];$k=$Ia["db"];set_password($l,$N,$V,$G);$_SESSION["db"][$l][$N][$V][$k]=true;if($Ia["permanent"]){$x=base64_encode($l)."-".base64_encode($N)."-".base64_encode($V)."-".base64_encode($k);$vf=$b->permanentLogin(true);$jf[$x]="$x:".base64_encode($vf?encrypt_string($G,$vf):"");cookie("adminer_permanent",implode(" ",$jf));}if(count($_POST)==1||DRIVER!=$l||SERVER!=$N||$_GET["username"]!==$V||DB!=$k)redirect(auth_url($l,$N,$V,$k));}elseif($_POST["logout"]){if($ad&&!verify_token()){page_header('Logout','Invalid CSRF token. Send the form again.');page_footer("db");exit;}else{foreach(array("pwds","db","dbs","queries")as$x)set_session($x,null);unset_permanent();redirect(substr(preg_replace('~\b(username|db|ns)=[^&]*&~','',ME),0,-1),'Logout successful.');}}elseif($jf&&!$_SESSION["pwds"]){session_regenerate_id();$vf=$b->permanentLogin();foreach($jf
as$x=>$X){list(,$cb)=explode(":",$X);list($Jh,$N,$V,$k)=array_map('base64_decode',explode("-",$x));set_password($Jh,$N,$V,decrypt_string(base64_decode($cb),$vf));$_SESSION["db"][$Jh][$N][$V][$k]=true;}}function
unset_permanent(){global$jf;foreach($jf
as$x=>$X){list($Jh,$N,$V,$k)=array_map('base64_decode',explode("-",$x));if($Jh==DRIVER&&$N==SERVER&&$V==$_GET["username"]&&$k==DB)unset($jf[$x]);}cookie("adminer_permanent",implode(" ",$jf));}function
auth_error($rc=null){global$g,$b,$ad;$og=session_name();$m="";if(!$_COOKIE[$og]&&$_GET[$og]&&ini_bool("session.use_only_cookies"))$m='Session support must be enabled.';elseif(isset($_GET["username"])){if(($_COOKIE[$og]||$_GET[$og])&&!$ad)$m='Session expired, please login again.';else{$G=get_password();if($G!==null){$m=h($rc?$rc->getMessage():(is_string($g)?$g:'Invalid credentials.'));if($G===false)$m.='<br>'.sprintf('Master password expired. <a href="http://www.adminer.org/en/extension/" target="_blank">Implement</a> %s method to make it permanent.','<code>permanentLogin()</code>');set_password(DRIVER,SERVER,$_GET["username"],null);}unset_permanent();}}$F=session_get_cookie_params();cookie("adminer_key",($_COOKIE["adminer_key"]?$_COOKIE["adminer_key"]:rand_string()),$F["lifetime"]);page_header('Login',$m,null);echo"<form action='' method='post'>\n";$b->loginForm();echo"<div>";hidden_fields($_POST,array("auth"));echo"</div>\n","</form>\n";page_footer("auth");}function
set_password($Jh,$N,$V,$G){$_SESSION["pwds"][$Jh][$N][$V]=($_COOKIE["adminer_key"]&&is_string($G)?array(encrypt_string($G,$_COOKIE["adminer_key"])):$G);}function
get_password(){$J=get_session("pwds");if(is_array($J))$J=($_COOKIE["adminer_key"]?decrypt_string($J[0],$_COOKIE["adminer_key"]):false);return$J;}if(isset($_GET["username"])){if(!class_exists("Min_DB")){unset($_SESSION["pwds"][DRIVER]);unset_permanent();page_header('No extension',sprintf('None of the supported PHP extensions (%s) are available.',implode(", ",$pf)),false);page_footer("auth");exit;}$g=connect();}if(!is_object($g)||!$b->login($_GET["username"],get_password())){auth_error();exit;}$l=new
Min_Driver($g);if($Ia&&$_POST["token"])$_POST["token"]=$T;$m='';if($_POST){if(!verify_token()){$pd="max_input_vars";$ce=ini_get($pd);if(extension_loaded("suhosin")){foreach(array("suhosin.request.max_vars","suhosin.post.max_vars")as$x){$X=ini_get($x);if($X&&(!$ce||$X<$ce)){$pd=$x;$ce=$X;}}}$m=(!$_POST["token"]&&$ce?sprintf('Maximum number of allowed fields exceeded. Please increase %s.',"'$pd'"):'Invalid CSRF token. Send the form again.');}}elseif($_SERVER["REQUEST_METHOD"]=="POST"){$m=sprintf('Too big POST data. Reduce the data or increase the %s configuration directive.',"'post_max_size'");if(isset($_GET["sql"]))$m.=' '.'You can upload a big SQL file via FTP and import it from server.';}if(!ini_bool("session.use_cookies")||@ini_set("session.use_cookies",false)!==false)session_write_close();function
connect_error(){global$b,$g,$T,$m,$Sb;$j=array();if(DB!=""){header("HTTP/1.1 404 Not Found");page_header('Database'.": ".h(DB),'Invalid database.',true);}else{if($_POST["db"]&&!$m)queries_redirect(substr(ME,0,-1),'Databases have been dropped.',drop_databases($_POST["db"]));page_header('Select database',$m,false);echo"<p class='links'>\n";foreach(array('database'=>'Create new database','privileges'=>'Privileges','processlist'=>'Process list','variables'=>'Variables','status'=>'Status',)as$x=>$X){if(support($x))echo"<a href='".h(ME)."$x='>$X</a>\n";}echo"<p>".sprintf('%s version: %s through PHP extension %s',$Sb[DRIVER],"<b>$g->server_info</b>","<b>$g->extension</b>")."\n","<p>".sprintf('Logged as: %s',"<b>".h(logged_user())."</b>")."\n";$j=$b->databases();if($j){$eg=support("scheme");$ib=collations();echo"<form action='' method='post'>\n","<table cellspacing='0' class='checkable' onclick='tableClick(event);' ondblclick='tableClick(event, true);'>\n","<thead><tr>".(support("database")?"<td>&nbsp;":"")."<th>".'Database'."<td>".'Collation'."<td>".'Tables'."</thead>\n";foreach($j
as$k){$Wf=h(ME)."db=".urlencode($k);echo"<tr".odd().">".(support("database")?"<td>".checkbox("db[]",$k,in_array($k,(array)$_POST["db"])):""),"<th><a href='$Wf'>".h($k)."</a>";$d=nbsp(db_collation($k,$ib));echo"<td>".(support("database")?"<a href='$Wf".($eg?"&amp;ns=":"")."&amp;database=' title='".'Alter database'."'>$d</a>":$d),"<td align='right'><a href='$Wf&amp;schema=' id='tables-".h($k)."' title='".'Database schema'."'>?</a>","\n";}echo"</table>\n",(support("database")?"<fieldset><legend>".'Selected'." <span id='selected'></span></legend><div>\n"."<input type='hidden' name='all' value='' onclick=\"selectCount('selected', formChecked(this, /^db/));\">\n"."<input type='submit' name='drop' value='".'Drop'."'".confirm().">\n"."</div></fieldset>\n":""),"<script type='text/javascript'>tableCheck();</script>\n","<input type='hidden' name='token' value='$T'>\n","</form>\n";}echo"<p><a href='".h(ME)."refresh=1'>".'Refresh'."</a>\n";}page_footer("db");if($j)echo"<script type='text/javascript'>ajaxSetHtml('".js_escape(ME)."script=connect');</script>\n";}if(isset($_GET["status"]))$_GET["variables"]=$_GET["status"];if(isset($_GET["import"]))$_GET["sql"]=$_GET["import"];if(!(DB!=""?$g->select_db(DB):isset($_GET["sql"])||isset($_GET["dump"])||isset($_GET["database"])||isset($_GET["processlist"])||isset($_GET["privileges"])||isset($_GET["user"])||isset($_GET["variables"])||$_GET["script"]=="connect"||$_GET["script"]=="kill")){if(DB!=""||$_GET["refresh"]){restart_session();set_session("dbs",null);}connect_error();exit;}if(support("scheme")&&DB!=""&&$_GET["ns"]!==""){if(!isset($_GET["ns"]))redirect(preg_replace('~ns=[^&]*&~','',ME)."ns=".get_schema());if(!set_schema($_GET["ns"])){header("HTTP/1.1 404 Not Found");page_header('Schema'.": ".h($_GET["ns"]),'Invalid schema.',true);page_footer("ns");exit;}}function
select($I,$h=null,$Pe=array()){global$w;$Rd=array();$v=array();$f=array();$Ra=array();$rh=array();$J=array();odd('');for($r=0;$K=$I->fetch_row();$r++){if(!$r){echo"<table cellspacing='0' class='nowrap'>\n","<thead><tr>";for($zd=0;$zd<count($K);$zd++){$n=$I->fetch_field();$C=$n->name;$Oe=$n->orgtable;$Ne=$n->orgname;$J[$n->table]=$Oe;if($Pe&&$w=="sql")$Rd[$zd]=($C=="table"?"table=":($C=="possible_keys"?"indexes=":null));elseif($Oe!=""){if(!isset($v[$Oe])){$v[$Oe]=array();foreach(indexes($Oe,$h)as$u){if($u["type"]=="PRIMARY"){$v[$Oe]=array_flip($u["columns"]);break;}}$f[$Oe]=$v[$Oe];}if(isset($f[$Oe][$Ne])){unset($f[$Oe][$Ne]);$v[$Oe][$Ne]=$zd;$Rd[$zd]=$Oe;}}if($n->charsetnr==63)$Ra[$zd]=true;$rh[$zd]=$n->type;echo"<th".($Oe!=""||$n->name!=$Ne?" title='".h(($Oe!=""?"$Oe.":"").$Ne)."'":"").">".h($C).($Pe?doc_link(array('sql'=>"explain-output.html#explain_".strtolower($C))):"");}echo"</thead>\n";}echo"<tr".odd().">";foreach($K
as$x=>$X){if($X===null)$X="<i>NULL</i>";elseif($Ra[$x]&&!is_utf8($X))$X="<i>".lang(array('%d byte','%d bytes'),strlen($X))."</i>";elseif(!strlen($X))$X="&nbsp;";else{$X=h($X);if($rh[$x]==254)$X="<code>$X</code>";}if(isset($Rd[$x])&&!$f[$Rd[$x]]){if($Pe&&$w=="sql"){$Q=$K[array_search("table=",$Rd)];$_=$Rd[$x].urlencode($Pe[$Q]!=""?$Pe[$Q]:$Q);}else{$_="edit=".urlencode($Rd[$x]);foreach($v[$Rd[$x]]as$gb=>$zd)$_.="&where".urlencode("[".bracket_escape($gb)."]")."=".urlencode($K[$zd]);}$X="<a href='".h(ME.$_)."'>$X</a>";}echo"<td>$X";}}echo($r?"</table>":"<p class='message'>".'No rows.')."\n";return$J;}function
referencable_primary($jg){$J=array();foreach(table_status('',true)as$Hg=>$Q){if($Hg!=$jg&&fk_support($Q)){foreach(fields($Hg)as$n){if($n["primary"]){if($J[$Hg]){unset($J[$Hg]);break;}$J[$Hg]=$n;}}}}return$J;}function
textarea($C,$Y,$L=10,$jb=80){global$w;echo"<textarea name='$C' rows='$L' cols='$jb' class='sqlarea jush-$w' spellcheck='false' wrap='off'>";if(is_array($Y)){foreach($Y
as$X)echo
h($X[0])."\n\n\n";}else
echo
h($Y);echo"</textarea>";}function
edit_type($x,$n,$ib,$Kc=array()){global$_g,$rh,$yh,$De;$U=$n["type"];echo'<td><select name="',$x,'[type]" class="type" onfocus="lastType = selectValue(this);" onchange="editingTypeChange(this);"',on_help("getTarget(event).value",1),'>';if($U&&!isset($rh[$U])&&!isset($Kc[$U]))array_unshift($_g,$U);if($Kc)$_g['Foreign keys']=$Kc;echo
optionlist($_g,$U),'</select>
<td><input name="',$x,'[length]" value="',h($n["length"]),'" size="3" onfocus="editingLengthFocus(this);"',(!$n["length"]&&preg_match('~var(char|binary)$~',$U)?" class='required'":""),' onchange="editingLengthChange(this);" onkeyup="this.onchange();"><td class="options">';echo"<select name='$x"."[collation]'".(preg_match('~(char|text|enum|set)$~',$U)?"":" class='hidden'").'><option value="">('.'collation'.')'.optionlist($ib,$n["collation"]).'</select>',($yh?"<select name='$x"."[unsigned]'".(!$U||preg_match('~((^|[^o])int|float|double|decimal)$~',$U)?"":" class='hidden'").'><option>'.optionlist($yh,$n["unsigned"]).'</select>':''),(isset($n['on_update'])?"<select name='$x"."[on_update]'".($U=="timestamp"?"":" class='hidden'").'>'.optionlist(array(""=>"(".'ON UPDATE'.")","CURRENT_TIMESTAMP"),$n["on_update"]).'</select>':''),($Kc?"<select name='$x"."[on_delete]'".(preg_match("~`~",$U)?"":" class='hidden'")."><option value=''>(".'ON DELETE'.")".optionlist(explode("|",$De),$n["on_delete"])."</select> ":" ");}function
process_length($y){global$kc;return(preg_match("~^\\s*\\(?\\s*$kc(?:\\s*,\\s*$kc)*+\\s*\\)?\\s*\$~",$y)&&preg_match_all("~$kc~",$y,$Wd)?"(".implode(",",$Wd[0]).")":preg_replace('~^[0-9].*~','(\0)',preg_replace('~[^-0-9,+()[\]]~','',$y)));}function
process_type($n,$hb="COLLATE"){global$yh;return" $n[type]".process_length($n["length"]).(preg_match('~(^|[^o])int|float|double|decimal~',$n["type"])&&in_array($n["unsigned"],$yh)?" $n[unsigned]":"").(preg_match('~char|text|enum|set~',$n["type"])&&$n["collation"]?" $hb ".q($n["collation"]):"");}function
process_field($n,$ph){global$w;$Hb=$n["default"];return
array(idf_escape(trim($n["field"])),process_type($ph),($n["null"]?" NULL":" NOT NULL"),(isset($Hb)?" DEFAULT ".((preg_match('~time~',$n["type"])&&preg_match('~^CURRENT_TIMESTAMP$~i',$Hb))||($n["type"]=="bit"&&preg_match("~^([0-9]+|b'[0-1]+')\$~",$Hb))||($w=="pgsql"&&preg_match("~^[a-z]+\\(('[^']*')+\\)\$~",$Hb))?$Hb:q($Hb)):""),($n["type"]=="timestamp"&&$n["on_update"]?" ON UPDATE $n[on_update]":""),(support("comment")&&$n["comment"]!=""?" COMMENT ".q($n["comment"]):""),($n["auto_increment"]?auto_increment():null),);}function
type_class($U){foreach(array('char'=>'text','date'=>'time|year','binary'=>'blob','enum'=>'set',)as$x=>$X){if(preg_match("~$x|$X~",$U))return" class='$x'";}}function
edit_fields($o,$ib,$U="TABLE",$Kc=array(),$nb=false){global$g,$qd;echo'<thead><tr class="wrap">
';if($U=="PROCEDURE"){echo'<td>&nbsp;';}echo'<th>',($U=="TABLE"?'Column name':'Parameter name'),'<td>Type<textarea id="enum-edit" rows="4" cols="12" wrap="off" style="display: none;" onblur="editingLengthBlur(this);"></textarea>
<td>Length
<td>Options
';if($U=="TABLE"){echo'<td>NULL
<td><input type="radio" name="auto_increment_col" value=""><acronym title="Auto Increment">AI</acronym>',doc_link(array('sql'=>"example-auto-increment.html",'sqlite'=>"autoinc.html",'pgsql'=>"datatype.html#DATATYPE-SERIAL",'mssql'=>"ms186775.aspx",)),'<td>Default values
',(support("comment")?"<td".($nb?"":" class='hidden'").">".'Comment':"");}echo'<td>',"<input type='image' class='icon' name='add[".(support("move_col")?0:count($o))."]' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=4.0.3' alt='+' title='".'Add next'."'>",'<script type="text/javascript">row_count = ',count($o),';</script>
</thead>
<tbody onkeydown="return editingKeydown(event);">
';foreach($o
as$r=>$n){$r++;$Qe=$n[($_POST?"orig":"field")];$Pb=(isset($_POST["add"][$r-1])||(isset($n["field"])&&!$_POST["drop_col"][$r]))&&(support("drop_col")||$Qe=="");echo'<tr',($Pb?"":" style='display: none;'"),'>
',($U=="PROCEDURE"?"<td>".html_select("fields[$r][inout]",explode("|",$qd),$n["inout"]):""),'<th>';if($Pb){echo'<input name="fields[',$r,'][field]" value="',h($n["field"]),'" onchange="editingNameChange(this);',($n["field"]!=""||count($o)>1?'':' editingAddRow(this);" onkeyup="if (this.value) editingAddRow(this);'),'" maxlength="64" autocapitalize="off">';}echo'<input type="hidden" name="fields[',$r,'][orig]" value="',h($Qe),'">
';edit_type("fields[$r]",$n,$ib,$Kc);if($U=="TABLE"){echo'<td>',checkbox("fields[$r][null]",1,$n["null"],"","","block"),'<td><label class="block"><input type="radio" name="auto_increment_col" value="',$r,'"';if($n["auto_increment"]){echo' checked';}?> onclick="var field = this.form['fields[' + this.value + '][field]']; if (!field.value) { field.value = 'id'; field.onchange(); }"></label><td><?php
echo
checkbox("fields[$r][has_default]",1,$n["has_default"]),'<input name="fields[',$r,'][default]" value="',h($n["default"]),'" onkeyup="keyupChange.call(this);" onchange="this.previousSibling.checked = true;">
',(support("comment")?"<td".($nb?"":" class='hidden'")."><input name='fields[$r][comment]' value='".h($n["comment"])."' maxlength='".($g->server_info>=5.5?1024:255)."'>":"");}echo"<td>",(support("move_col")?"<input type='image' class='icon' name='add[$r]' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=4.0.3' alt='+' title='".'Add next'."' onclick='return !editingAddRow(this, 1);'>&nbsp;"."<input type='image' class='icon' name='up[$r]' src='".h(preg_replace("~\\?.*~","",ME))."?file=up.gif&amp;version=4.0.3' alt='^' title='".'Move up'."'>&nbsp;"."<input type='image' class='icon' name='down[$r]' src='".h(preg_replace("~\\?.*~","",ME))."?file=down.gif&amp;version=4.0.3' alt='v' title='".'Move down'."'>&nbsp;":""),($Qe==""||support("drop_col")?"<input type='image' class='icon' name='drop_col[$r]' src='".h(preg_replace("~\\?.*~","",ME))."?file=cross.gif&amp;version=4.0.3' alt='x' title='".'Remove'."' onclick=\"return !editingRemoveRow(this, 'fields\$1[field]');\">":""),"\n";}}function
process_fields(&$o){ksort($o);$D=0;if($_POST["up"]){$Id=0;foreach($o
as$x=>$n){if(key($_POST["up"])==$x){unset($o[$x]);array_splice($o,$Id,0,array($n));break;}if(isset($n["field"]))$Id=$D;$D++;}}elseif($_POST["down"]){$Mc=false;foreach($o
as$x=>$n){if(isset($n["field"])&&$Mc){unset($o[key($_POST["down"])]);array_splice($o,$D,0,array($Mc));break;}if(key($_POST["down"])==$x)$Mc=$n;$D++;}}elseif($_POST["add"]){$o=array_values($o);array_splice($o,key($_POST["add"]),0,array(array()));}elseif(!$_POST["drop_col"])return
false;return
true;}function
normalize_enum($B){return"'".str_replace("'","''",addcslashes(stripcslashes(str_replace($B[0][0].$B[0][0],$B[0][0],substr($B[0],1,-1))),'\\'))."'";}function
grant($Sc,$xf,$f,$Ce){if(!$xf)return
true;if($xf==array("ALL PRIVILEGES","GRANT OPTION"))return($Sc=="GRANT"?queries("$Sc ALL PRIVILEGES$Ce WITH GRANT OPTION"):queries("$Sc ALL PRIVILEGES$Ce")&&queries("$Sc GRANT OPTION$Ce"));return
queries("$Sc ".preg_replace('~(GRANT OPTION)\\([^)]*\\)~','\\1',implode("$f, ",$xf).$f).$Ce);}function
drop_create($Tb,$xb,$Ub,$Tg,$Wb,$A,$he,$fe,$ge,$_e,$se){if($_POST["drop"])query_redirect($Tb,$A,$he);elseif($_e=="")query_redirect($xb,$A,$ge);elseif($_e!=$se){$zb=queries($xb);queries_redirect($A,$fe,$zb&&queries($Tb));if($zb)queries($Ub);}else
queries_redirect($A,$fe,queries($Tg)&&queries($Wb)&&queries($Tb)&&queries($xb));}function
create_trigger($Ce,$K){global$w;$Yg=" $K[Timing] $K[Event]";return"CREATE TRIGGER ".idf_escape($K["Trigger"]).($w=="mssql"?$Ce.$Yg:$Yg.$Ce).rtrim(" $K[Type]\n$K[Statement]",";").";";}function
create_routine($Xf,$K){global$qd;$O=array();$o=(array)$K["fields"];ksort($o);foreach($o
as$n){if($n["field"]!="")$O[]=(preg_match("~^($qd)\$~",$n["inout"])?"$n[inout] ":"").idf_escape($n["field"]).process_type($n,"CHARACTER SET");}return"CREATE $Xf ".idf_escape(trim($K["name"]))." (".implode(", ",$O).")".(isset($_GET["function"])?" RETURNS".process_type($K["returns"],"CHARACTER SET"):"").($K["language"]?" LANGUAGE $K[language]":"").rtrim("\n$K[definition]",";").";";}function
remove_definer($H){return
preg_replace('~^([A-Z =]+) DEFINER=`'.preg_replace('~@(.*)~','`@`(%|\\1)',logged_user()).'`~','\\1',$H);}function
format_foreign_key($p){global$De;return" FOREIGN KEY (".implode(", ",array_map('idf_escape',$p["source"])).") REFERENCES ".table($p["table"])." (".implode(", ",array_map('idf_escape',$p["target"])).")".(preg_match("~^($De)\$~",$p["on_delete"])?" ON DELETE $p[on_delete]":"").(preg_match("~^($De)\$~",$p["on_update"])?" ON UPDATE $p[on_update]":"");}function
tar_file($Ec,$dh){$J=pack("a100a8a8a8a12a12",$Ec,644,0,0,decoct($dh->size),decoct(time()));$ab=8*32;for($r=0;$r<strlen($J);$r++)$ab+=ord($J[$r]);$J.=sprintf("%06o",$ab)."\0 ";echo$J,str_repeat("\0",512-strlen($J));$dh->send();echo
str_repeat("\0",511-($dh->size+511)%512);}function
ini_bytes($pd){$X=ini_get($pd);switch(strtolower(substr($X,-1))){case'g':$X*=1024;case'm':$X*=1024;case'k':$X*=1024;}return$X;}function
doc_link($hf){global$w,$g;$Ah=array('sql'=>"http://dev.mysql.com/doc/refman/".substr($g->server_info,0,3)."/en/",'sqlite'=>"http://www.sqlite.org/",'pgsql'=>"http://www.postgresql.org/docs/".substr($g->server_info,0,3)."/static/",'mssql'=>"http://msdn.microsoft.com/library/",'oracle'=>"http://download.oracle.com/docs/cd/B19306_01/server.102/b14200/",);return($hf[$w]?"<a href='$Ah[$w]$hf[$w]' target='_blank' rel='noreferrer'><sup>?</sup></a>":"");}$De="RESTRICT|NO ACTION|CASCADE|SET NULL|SET DEFAULT";class
TmpFile{var$handler;var$size;function
TmpFile(){$this->handler=tmpfile();}function
write($sb){$this->size+=strlen($sb);fwrite($this->handler,$sb);}function
send(){fseek($this->handler,0);fpassthru($this->handler);fclose($this->handler);}}$kc="'(?:''|[^'\\\\]|\\\\.)*+'";$qd="IN|OUT|INOUT";if(isset($_GET["select"])&&($_POST["edit"]||$_POST["clone"])&&!$_POST["save"])$_GET["edit"]=$_GET["select"];if(isset($_GET["callf"]))$_GET["call"]=$_GET["callf"];if(isset($_GET["function"]))$_GET["procedure"]=$_GET["function"];if(isset($_GET["download"])){$a=$_GET["download"];$o=fields($a);header("Content-Type: application/octet-stream");header("Content-Disposition: attachment; filename=".friendly_url("$a-".implode("_",$_GET["where"])).".".friendly_url($_GET["field"]));$M=array(idf_escape($_GET["field"]));$I=$l->select($a,$M,array(where($_GET,$o)),$M);$K=($I?$I->fetch_row():array());echo$K[0];exit;}elseif(isset($_GET["table"])){$a=$_GET["table"];$o=fields($a);if(!$o)$m=error();$R=table_status1($a,true);page_header(($o&&is_view($R)?'View':'Table').": ".h($a),$m);$b->selectLinks($R);$mb=$R["Comment"];if($mb!="")echo"<p>".'Comment'.": ".h($mb)."\n";if($o){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Column'."<td>".'Type'.(support("comment")?"<td>".'Comment':"")."</thead>\n";foreach($o
as$n){echo"<tr".odd()."><th>".h($n["field"]),"<td title='".h($n["collation"])."'>".h($n["full_type"]).($n["null"]?" <i>NULL</i>":"").($n["auto_increment"]?" <i>".'Auto Increment'."</i>":""),(isset($n["default"])?" [<b>".h($n["default"])."</b>]":""),(support("comment")?"<td>".nbsp($n["comment"]):""),"\n";}echo"</table>\n";}if(!is_view($R)){if(support("indexes")){echo"<h3 id='indexes'>".'Indexes'."</h3>\n";$v=indexes($a);if($v){echo"<table cellspacing='0'>\n";foreach($v
as$C=>$u){ksort($u["columns"]);$uf=array();foreach($u["columns"]as$x=>$X)$uf[]="<i>".h($X)."</i>".($u["lengths"][$x]?"(".$u["lengths"][$x].")":"").($u["descs"][$x]?" DESC":"");echo"<tr title='".h($C)."'><th>$u[type]<td>".implode(", ",$uf)."\n";}echo"</table>\n";}echo'<p class="links"><a href="'.h(ME).'indexes='.urlencode($a).'">'.'Alter indexes'."</a>\n";}if(fk_support($R)){echo"<h3 id='foreign-keys'>".'Foreign keys'."</h3>\n";$Kc=foreign_keys($a);if($Kc){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Source'."<td>".'Target'."<td>".'ON DELETE'."<td>".'ON UPDATE'."<td>&nbsp;</thead>\n";foreach($Kc
as$C=>$p){echo"<tr title='".h($C)."'>","<th><i>".implode("</i>, <i>",array_map('h',$p["source"]))."</i>","<td><a href='".h($p["db"]!=""?preg_replace('~db=[^&]*~',"db=".urlencode($p["db"]),ME):($p["ns"]!=""?preg_replace('~ns=[^&]*~',"ns=".urlencode($p["ns"]),ME):ME))."table=".urlencode($p["table"])."'>".($p["db"]!=""?"<b>".h($p["db"])."</b>.":"").($p["ns"]!=""?"<b>".h($p["ns"])."</b>.":"").h($p["table"])."</a>","(<i>".implode("</i>, <i>",array_map('h',$p["target"]))."</i>)","<td>".nbsp($p["on_delete"])."\n","<td>".nbsp($p["on_update"])."\n",'<td><a href="'.h(ME.'foreign='.urlencode($a).'&name='.urlencode($C)).'">'.'Alter'.'</a>';}echo"</table>\n";}echo'<p class="links"><a href="'.h(ME).'foreign='.urlencode($a).'">'.'Add foreign key'."</a>\n";}}if(support(is_view($R)?"view_trigger":"trigger")){echo"<h3 id='triggers'>".'Triggers'."</h3>\n";$oh=triggers($a);if($oh){echo"<table cellspacing='0'>\n";foreach($oh
as$x=>$X)echo"<tr valign='top'><td>$X[0]<td>$X[1]<th>".h($x)."<td><a href='".h(ME.'trigger='.urlencode($a).'&name='.urlencode($x))."'>".'Alter'."</a>\n";echo"</table>\n";}echo'<p class="links"><a href="'.h(ME).'trigger='.urlencode($a).'">'.'Add trigger'."</a>\n";}}elseif(isset($_GET["schema"])){page_header('Database schema',"",array(),h(DB.($_GET["ns"]?".$_GET[ns]":"")));$Jg=array();$Kg=array();$C="adminer_schema";$ea=($_GET["schema"]?$_GET["schema"]:$_COOKIE[($_COOKIE["$C-".DB]?"$C-".DB:$C)]);preg_match_all('~([^:]+):([-0-9.]+)x([-0-9.]+)(_|$)~',$ea,$Wd,PREG_SET_ORDER);foreach($Wd
as$r=>$B){$Jg[$B[1]]=array($B[2],$B[3]);$Kg[]="\n\t'".js_escape($B[1])."': [ $B[2], $B[3] ]";}$fh=0;$Oa=-1;$dg=array();$Lf=array();$Md=array();foreach(table_status('',true)as$Q=>$R){if(is_view($R))continue;$mf=0;$dg[$Q]["fields"]=array();foreach(fields($Q)as$C=>$n){$mf+=1.25;$n["pos"]=$mf;$dg[$Q]["fields"][$C]=$n;}$dg[$Q]["pos"]=($Jg[$Q]?$Jg[$Q]:array($fh,0));foreach($b->foreignKeys($Q)as$X){if(!$X["db"]){$Kd=$Oa;if($Jg[$Q][1]||$Jg[$X["table"]][1])$Kd=min(floatval($Jg[$Q][1]),floatval($Jg[$X["table"]][1]))-1;else$Oa-=.1;while($Md[(string)$Kd])$Kd-=.0001;$dg[$Q]["references"][$X["table"]][(string)$Kd]=array($X["source"],$X["target"]);$Lf[$X["table"]][$Q][(string)$Kd]=$X["target"];$Md[(string)$Kd]=true;}}$fh=max($fh,$dg[$Q]["pos"][0]+2.5+$mf);}echo'<div id="schema" style="height: ',$fh,'em;" onselectstart="return false;">
<script type="text/javascript">
var tablePos = {',implode(",",$Kg)."\n",'};
var em = document.getElementById(\'schema\').offsetHeight / ',$fh,';
document.onmousemove = schemaMousemove;
document.onmouseup = function (ev) {
	schemaMouseup(ev, \'',js_escape(DB),'\');
};
</script>
';foreach($dg
as$C=>$Q){echo"<div class='table' style='top: ".$Q["pos"][0]."em; left: ".$Q["pos"][1]."em;' onmousedown='schemaMousedown(this, event);'>",'<a href="'.h(ME).'table='.urlencode($C).'"><b>'.h($C)."</b></a>";foreach($Q["fields"]as$n){$X='<span'.type_class($n["type"]).' title="'.h($n["full_type"].($n["null"]?" NULL":'')).'">'.h($n["field"]).'</span>';echo"<br>".($n["primary"]?"<i>$X</i>":$X);}foreach((array)$Q["references"]as$Qg=>$Mf){foreach($Mf
as$Kd=>$If){$Ld=$Kd-$Jg[$C][1];$r=0;foreach($If[0]as$sg)echo"\n<div class='references' title='".h($Qg)."' id='refs$Kd-".($r++)."' style='left: $Ld"."em; top: ".$Q["fields"][$sg]["pos"]."em; padding-top: .5em;'><div style='border-top: 1px solid Gray; width: ".(-$Ld)."em;'></div></div>";}}foreach((array)$Lf[$C]as$Qg=>$Mf){foreach($Mf
as$Kd=>$f){$Ld=$Kd-$Jg[$C][1];$r=0;foreach($f
as$Pg)echo"\n<div class='references' title='".h($Qg)."' id='refd$Kd-".($r++)."' style='left: $Ld"."em; top: ".$Q["fields"][$Pg]["pos"]."em; height: 1.25em; background: url(".h(preg_replace("~\\?.*~","",ME))."?file=arrow.gif) no-repeat right center;&amp;version=4.0.3'><div style='height: .5em; border-bottom: 1px solid Gray; width: ".(-$Ld)."em;'></div></div>";}}echo"\n</div>\n";}foreach($dg
as$C=>$Q){foreach((array)$Q["references"]as$Qg=>$Mf){foreach($Mf
as$Kd=>$If){$le=$fh;$ae=-10;foreach($If[0]as$x=>$sg){$nf=$Q["pos"][0]+$Q["fields"][$sg]["pos"];$of=$dg[$Qg]["pos"][0]+$dg[$Qg]["fields"][$If[1][$x]]["pos"];$le=min($le,$nf,$of);$ae=max($ae,$nf,$of);}echo"<div class='references' id='refl$Kd' style='left: $Kd"."em; top: $le"."em; padding: .5em 0;'><div style='border-right: 1px solid Gray; margin-top: 1px; height: ".($ae-$le)."em;'></div></div>\n";}}}echo'</div>
<p class="links"><a href="',h(ME."schema=".urlencode($ea)),'" id="schema-link">Permanent link</a>
';}elseif(isset($_GET["dump"])){$a=$_GET["dump"];if($_POST&&!$m){$vb="";foreach(array("output","format","db_style","routines","events","table_style","auto_increment","triggers","data_style")as$x)$vb.="&$x=".urlencode($_POST[$x]);cookie("adminer_export",substr($vb,1));$S=array_flip((array)$_POST["tables"])+array_flip((array)$_POST["data"]);$xc=dump_headers((count($S)==1?key($S):DB),(DB==""||count($S)>1));$vd=preg_match('~sql~',$_POST["format"]);if($vd)echo"-- Adminer $ia ".$Sb[DRIVER]." dump

".($w!="sql"?"":"SET NAMES utf8;
".($_POST["data_style"]?"SET foreign_key_checks = 0;
SET time_zone = ".q(substr(preg_replace('~^[^-]~','+\0',$g->result("SELECT TIMEDIFF(NOW(), UTC_TIMESTAMP)")),0,6)).";
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';
":"")."
");$Ag=$_POST["db_style"];$j=array(DB);if(DB==""){$j=$_POST["databases"];if(is_string($j))$j=explode("\n",rtrim(str_replace("\r","",$j),"\n"));}foreach((array)$j
as$k){$b->dumpDatabase($k);if($g->select_db($k)){if($vd&&preg_match('~CREATE~',$Ag)&&($xb=$g->result("SHOW CREATE DATABASE ".idf_escape($k),1))){if($Ag=="DROP+CREATE")echo"DROP DATABASE IF EXISTS ".idf_escape($k).";\n";echo"$xb;\n";}if($vd){if($Ag)echo
use_sql($k).";\n\n";$Ve="";if($_POST["routines"]){foreach(array("FUNCTION","PROCEDURE")as$Xf){foreach(get_rows("SHOW $Xf STATUS WHERE Db = ".q($k),null,"-- ")as$K)$Ve.=($Ag!='DROP+CREATE'?"DROP $Xf IF EXISTS ".idf_escape($K["Name"]).";;\n":"").remove_definer($g->result("SHOW CREATE $Xf ".idf_escape($K["Name"]),2)).";;\n\n";}}if($_POST["events"]){foreach(get_rows("SHOW EVENTS",null,"-- ")as$K)$Ve.=($Ag!='DROP+CREATE'?"DROP EVENT IF EXISTS ".idf_escape($K["Name"]).";;\n":"").remove_definer($g->result("SHOW CREATE EVENT ".idf_escape($K["Name"]),3)).";;\n\n";}if($Ve)echo"DELIMITER ;;\n\n$Ve"."DELIMITER ;\n\n";}if($_POST["table_style"]||$_POST["data_style"]){$Mh=array();foreach(table_status('',true)as$C=>$R){$Q=(DB==""||in_array($C,(array)$_POST["tables"]));$Ab=(DB==""||in_array($C,(array)$_POST["data"]));if($Q||$Ab){if($xc=="tar"){$dh=new
TmpFile;ob_start(array($dh,'write'),1e5);}$b->dumpTable($C,($Q?$_POST["table_style"]:""),(is_view($R)?2:0));if(is_view($R))$Mh[]=$C;elseif($Ab){$o=fields($C);$b->dumpData($C,$_POST["data_style"],"SELECT *".convert_fields($o,$o)." FROM ".table($C));}if($vd&&$_POST["triggers"]&&$Q&&($oh=trigger_sql($C,$_POST["table_style"])))echo"\nDELIMITER ;;\n$oh\nDELIMITER ;\n";if($xc=="tar"){ob_end_flush();tar_file((DB!=""?"":"$k/")."$C.csv",$dh);}elseif($vd)echo"\n";}}foreach($Mh
as$Lh)$b->dumpTable($Lh,$_POST["table_style"],1);if($xc=="tar")echo
pack("x512");}}}if($vd)echo"-- ".$g->result("SELECT NOW()")."\n";exit;}page_header('Export',$m,($_GET["export"]!=""?array("table"=>$_GET["export"]):array()),h(DB));echo'
<form action="" method="post">
<table cellspacing="0">
';$Eb=array('','USE','DROP+CREATE','CREATE');$Lg=array('','DROP+CREATE','CREATE');$Bb=array('','TRUNCATE+INSERT','INSERT');if($w=="sql")$Bb[]='INSERT+UPDATE';parse_str($_COOKIE["adminer_export"],$K);if(!$K)$K=array("output"=>"text","format"=>"sql","db_style"=>(DB!=""?"":"CREATE"),"table_style"=>"DROP+CREATE","data_style"=>"INSERT");if(!isset($K["events"])){$K["routines"]=$K["events"]=($_GET["dump"]=="");$K["triggers"]=$K["table_style"];}echo"<tr><th>".'Output'."<td>".html_select("output",$b->dumpOutput(),$K["output"],0)."\n";echo"<tr><th>".'Format'."<td>".html_select("format",$b->dumpFormat(),$K["format"],0)."\n";echo($w=="sqlite"?"":"<tr><th>".'Database'."<td>".html_select('db_style',$Eb,$K["db_style"]).(support("routine")?checkbox("routines",1,$K["routines"],'Routines'):"").(support("event")?checkbox("events",1,$K["events"],'Events'):"")),"<tr><th>".'Tables'."<td>".html_select('table_style',$Lg,$K["table_style"]).checkbox("auto_increment",1,$K["auto_increment"],'Auto Increment').(support("trigger")?checkbox("triggers",1,$K["triggers"],'Triggers'):""),"<tr><th>".'Data'."<td>".html_select('data_style',$Bb,$K["data_style"]),'</table>
<p><input type="submit" value="Export">
<input type="hidden" name="token" value="',$T,'">

<table cellspacing="0">
';$rf=array();if(DB!=""){$Za=($a!=""?"":" checked");echo"<thead><tr>","<th style='text-align: left;'><label class='block'><input type='checkbox' id='check-tables'$Za onclick='formCheck(this, /^tables\\[/);'>".'Tables'."</label>","<th style='text-align: right;'><label class='block'>".'Data'."<input type='checkbox' id='check-data'$Za onclick='formCheck(this, /^data\\[/);'></label>","</thead>\n";$Mh="";$Mg=tables_list();foreach($Mg
as$C=>$U){$qf=preg_replace('~_.*~','',$C);$Za=($a==""||$a==(substr($a,-1)=="%"?"$qf%":$C));$uf="<tr><td>".checkbox("tables[]",$C,$Za,$C,"checkboxClick(event, this); formUncheck('check-tables');","block");if($U!==null&&!preg_match('~table~i',$U))$Mh.="$uf\n";else
echo"$uf<td align='right'><label class='block'><span id='Rows-".h($C)."'></span>".checkbox("data[]",$C,$Za,"","checkboxClick(event, this); formUncheck('check-data');")."</label>\n";$rf[$qf]++;}echo$Mh;if($Mg)echo"<script type='text/javascript'>ajaxSetHtml('".js_escape(ME)."script=db');</script>\n";}else{echo"<thead><tr><th style='text-align: left;'><label class='block'><input type='checkbox' id='check-databases'".($a==""?" checked":"")." onclick='formCheck(this, /^databases\\[/);'>".'Database'."</label></thead>\n";$j=$b->databases();if($j){foreach($j
as$k){if(!information_schema($k)){$qf=preg_replace('~_.*~','',$k);echo"<tr><td>".checkbox("databases[]",$k,$a==""||$a=="$qf%",$k,"formUncheck('check-databases');","block")."\n";$rf[$qf]++;}}}else
echo"<tr><td><textarea name='databases' rows='10' cols='20'></textarea>";}echo'</table>
</form>
';$Gc=true;foreach($rf
as$x=>$X){if($x!=""&&$X>1){echo($Gc?"<p>":" ")."<a href='".h(ME)."dump=".urlencode("$x%")."'>".h($x)."</a>";$Gc=false;}}}elseif(isset($_GET["privileges"])){page_header('Privileges');$I=$g->query("SELECT User, Host FROM mysql.".(DB==""?"user":"db WHERE ".q(DB)." LIKE Db")." ORDER BY Host, User");$Sc=$I;if(!$I)$I=$g->query("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', 1) AS User, SUBSTRING_INDEX(CURRENT_USER, '@', -1) AS Host");echo"<form action=''><p>\n";hidden_fields_get();echo"<input type='hidden' name='db' value='".h(DB)."'>\n",($Sc?"":"<input type='hidden' name='grant' value=''>\n"),"<table cellspacing='0'>\n","<thead><tr><th>".'Username'."<th>".'Server'."<th>&nbsp;</thead>\n";while($K=$I->fetch_assoc())echo'<tr'.odd().'><td>'.h($K["User"])."<td>".h($K["Host"]).'<td><a href="'.h(ME.'user='.urlencode($K["User"]).'&host='.urlencode($K["Host"])).'">'.'Edit'."</a>\n";if(!$Sc||DB!="")echo"<tr".odd()."><td><input name='user' autocapitalize='off'><td><input name='host' value='localhost' autocapitalize='off'><td><input type='submit' value='".'Edit'."'>\n";echo"</table>\n","</form>\n",'<p class="links"><a href="'.h(ME).'user=">'.'Create user'."</a>";}elseif(isset($_GET["sql"])){if(!$m&&$_POST["export"]){dump_headers("sql");$b->dumpTable("","");$b->dumpData("","table",$_POST["query"]);exit;}restart_session();$cd=&get_session("queries");$bd=&$cd[DB];if(!$m&&$_POST["clear"]){$bd=array();redirect(remove_from_uri("history"));}page_header((isset($_GET["import"])?'Import':'SQL command'),$m);if(!$m&&$_POST){$Oc=false;if(!isset($_GET["import"]))$H=$_POST["query"];elseif($_POST["webfile"]){$Oc=@fopen((file_exists("adminer.sql")?"adminer.sql":"compress.zlib://adminer.sql.gz"),"rb");$H=($Oc?fread($Oc,1e6):false);}else$H=get_file("sql_file",true);if(is_string($H)){if(function_exists('memory_get_usage'))@ini_set("memory_limit",max(ini_bytes("memory_limit"),2*strlen($H)+memory_get_usage()+8e6));if($H!=""&&strlen($H)<1e6){$Af=$H.(preg_match("~;[ \t\r\n]*\$~",$H)?"":";");if(!$bd||reset(end($bd))!=$Af){restart_session();$bd[]=array($Af,time());set_session("queries",$cd);stop_session();}}$tg="(?:\\s|/\\*.*\\*/|(?:#|-- )[^\n]*\n|--\r?\n)";$Jb=";";$D=0;$gc=true;$h=connect();if(is_object($h)&&DB!="")$h->select_db(DB);$lb=0;$mc=array();$Qd=0;$af='[\'"'.($w=="sql"?'`#':($w=="sqlite"?'`[':($w=="mssql"?'[':''))).']|/\\*|-- |$'.($w=="pgsql"?'|\\$[^$]*\\$':'');$gh=microtime(true);parse_str($_COOKIE["adminer_export"],$va);$Yb=$b->dumpFormat();unset($Yb["sql"]);while($H!=""){if(!$D&&preg_match("~^$tg*DELIMITER\\s+(\\S+)~i",$H,$B)){$Jb=$B[1];$H=substr($H,strlen($B[0]));}else{preg_match('('.preg_quote($Jb)."\\s*|$af)",$H,$B,PREG_OFFSET_CAPTURE,$D);list($Mc,$mf)=$B[0];if(!$Mc&&$Oc&&!feof($Oc))$H.=fread($Oc,1e5);else{if(!$Mc&&rtrim($H)=="")break;$D=$mf+strlen($Mc);if($Mc&&rtrim($Mc)!=$Jb){while(preg_match('('.($Mc=='/*'?'\\*/':($Mc=='['?']':(preg_match('~^-- |^#~',$Mc)?"\n":preg_quote($Mc)."|\\\\."))).'|$)s',$H,$B,PREG_OFFSET_CAPTURE,$D)){$bg=$B[0][0];if(!$bg&&$Oc&&!feof($Oc))$H.=fread($Oc,1e5);else{$D=$B[0][1]+strlen($bg);if($bg[0]!="\\")break;}}}else{$gc=false;$Af=substr($H,0,$mf);$lb++;$uf="<pre id='sql-$lb'><code class='jush-$w'>".shorten_utf8(trim($Af),1000)."</code></pre>\n";if(!$_POST["only_errors"]){echo$uf;ob_flush();flush();}$wg=microtime(true);if($g->multi_query($Af)&&is_object($h)&&preg_match("~^$tg*USE\\b~isU",$Af))$h->query($Af);do{$I=$g->store_result();$hc=microtime(true);$Wg=" <span class='time'>(".format_time($wg,$hc).")</span>".(strlen($Af)<1000?" <a href='".h(ME)."sql=".urlencode(trim($Af))."'>".'Edit'."</a>":"");if($g->error){echo($_POST["only_errors"]?$uf:""),"<p class='error'>".'Error in query'.($g->errno?" ($g->errno)":"").": ".error()."\n";$mc[]=" <a href='#sql-$lb'>$lb</a>";if($_POST["error_stops"])break
2;}elseif(is_object($I)){$Pe=select($I,$h);if(!$_POST["only_errors"]){echo"<form action='' method='post'>\n","<p>".($I->num_rows?lang(array('%d row','%d rows'),$I->num_rows):"").$Wg;$s="export-$lb";$wc=", <a href='#$s' onclick=\"return !toggle('$s');\">".'Export'."</a><span id='$s' class='hidden'>: ".html_select("output",$b->dumpOutput(),$va["output"])." ".html_select("format",$Yb,$va["format"])."<input type='hidden' name='query' value='".h($Af)."'>"." <input type='submit' name='export' value='".'Export'."'><input type='hidden' name='token' value='$T'></span>\n";if($h&&preg_match("~^($tg|\\()*SELECT\\b~isU",$Af)&&($vc=explain($h,$Af))){$s="explain-$lb";echo", <a href='#$s' onclick=\"return !toggle('$s');\">EXPLAIN</a>$wc","<div id='$s' class='hidden'>\n";select($vc,$h,$Pe);echo"</div>\n";}else
echo$wc;echo"</form>\n";}}else{if(preg_match("~^$tg*(CREATE|DROP|ALTER)$tg+(DATABASE|SCHEMA)\\b~isU",$Af)){restart_session();set_session("dbs",null);stop_session();}if(!$_POST["only_errors"])echo"<p class='message' title='".h($g->info)."'>".lang(array('Query executed OK, %d row affected.','Query executed OK, %d rows affected.'),$g->affected_rows)."$Wg\n";}$wg=$hc;}while($g->next_result());$Qd+=substr_count($Af.$Mc,"\n");$H=substr($H,$D);$D=0;}}}}if($gc)echo"<p class='message'>".'No commands to execute.'."\n";elseif($_POST["only_errors"]){echo"<p class='message'>".lang(array('%d query executed OK.','%d queries executed OK.'),$lb-count($mc))," <span class='time'>(".format_time($gh,microtime(true)).")</span>\n";}elseif($mc&&$lb>1)echo"<p class='error'>".'Error in query'.": ".implode("",$mc)."\n";}else
echo"<p class='error'>".upload_error($H)."\n";}echo'
<form action="" method="post" enctype="multipart/form-data" id="form">
';$sc="<input type='submit' value='".'Execute'."' title='Ctrl+Enter'>";if(!isset($_GET["import"])){$Af=$_GET["sql"];if($_POST)$Af=$_POST["query"];elseif($_GET["history"]=="all")$Af=$bd;elseif($_GET["history"]!="")$Af=$bd[$_GET["history"]][0];echo"<p>";textarea("query",$Af,20);echo($_POST?"":"<script type='text/javascript'>focus(document.getElementsByTagName('textarea')[0]);</script>\n"),"<p>$sc\n";}else{echo"<fieldset><legend>".'File upload'."</legend><div>",(ini_bool("file_uploads")?'<input type="file" name="sql_file[]" multiple> (&lt; '.ini_get("upload_max_filesize").'B)':'File uploads are disabled.'),"\n$sc","</div></fieldset>\n","<fieldset><legend>".'From server'."</legend><div>",sprintf('Webserver file %s',"<code>adminer.sql".(extension_loaded("zlib")?"[.gz]":"")."</code>"),' <input type="submit" name="webfile" value="'.'Run file'.'">',"</div></fieldset>\n","<p>";}echo
checkbox("error_stops",1,($_POST?$_POST["error_stops"]:isset($_GET["import"])),'Stop on error')."\n",checkbox("only_errors",1,($_POST?$_POST["only_errors"]:isset($_GET["import"])),'Show only errors')."\n","<input type='hidden' name='token' value='$T'>\n";if(!isset($_GET["import"])&&$bd){print_fieldset("history",'History',$_GET["history"]!="");for($X=end($bd);$X;$X=prev($bd)){$x=key($bd);list($Af,$Wg)=$X;echo'<a href="'.h(ME."sql=&history=$x").'">'.'Edit'."</a> <span class='time' title='".@date('Y-m-d',$Wg)."'>".@date("H:i:s",$Wg)."</span> <code class='jush-$w'>".shorten_utf8(ltrim(str_replace("\n"," ",str_replace("\r","",preg_replace('~^(#|-- ).*~m','',$Af)))),80,"</code>")."<br>\n";}echo"<input type='submit' name='clear' value='".'Clear'."'>\n","<a href='".h(ME."sql=&history=all")."'>".'Edit all'."</a>\n","</div></fieldset>\n";}echo'</form>
';}elseif(isset($_GET["edit"])){$a=$_GET["edit"];$o=fields($a);$Z=(isset($_GET["select"])?(count($_POST["check"])==1?where_check($_POST["check"][0],$o):""):where($_GET,$o));$zh=(isset($_GET["select"])?$_POST["edit"]:$Z);foreach($o
as$C=>$n){if(!isset($n["privileges"][$zh?"update":"insert"])||$b->fieldName($n)=="")unset($o[$C]);}if($_POST&&!$m&&!isset($_GET["select"])){$A=$_POST["referer"];if($_POST["insert"])$A=($zh?null:$_SERVER["REQUEST_URI"]);elseif(!preg_match('~^.+&select=.+$~',$A))$A=ME."select=".urlencode($a);$v=indexes($a);$uh=unique_array($_GET["where"],$v);$Df="\nWHERE $Z";if(isset($_POST["delete"]))queries_redirect($A,'Item has been deleted.',$l->delete($a,$Df,!$uh));else{$O=array();foreach($o
as$C=>$n){$X=process_input($n);if($X!==false&&$X!==null)$O[idf_escape($C)]=$X;}if($zh){if(!$O)redirect($A);queries_redirect($A,'Item has been updated.',$l->update($a,$O,$Df,!$uh));if(is_ajax()){page_headers();page_messages($m);exit;}}else{$I=$l->insert($a,$O);$Jd=($I?last_id():0);queries_redirect($A,sprintf('Item%s has been inserted.',($Jd?" $Jd":"")),$I);}}}$Hg=$b->tableName(table_status1($a,true));page_header(($zh?'Edit':'Insert'),$m,array("select"=>array($a,$Hg)),$Hg);$K=null;if($_POST["save"])$K=(array)$_POST["fields"];elseif($Z){$M=array();foreach($o
as$C=>$n){if(isset($n["privileges"]["select"])){$Ea=convert_field($n);if($_POST["clone"]&&$n["auto_increment"])$Ea="''";if($w=="sql"&&preg_match("~enum|set~",$n["type"]))$Ea="1*".idf_escape($C);$M[]=($Ea?"$Ea AS ":"").idf_escape($C);}}$K=array();if(!support("table"))$M=array("*");if($M){$I=$l->select($a,$M,array($Z),$M,array(),(isset($_GET["select"])?2:1));$K=$I->fetch_assoc();if(!$K)$K=false;if(isset($_GET["select"])&&(!$K||$I->fetch_assoc()))$K=null;}}if(!support("table")&&!$o){if(!$Z){$I=$l->select($a,array("*"),$Z,array("*"));$K=($I?$I->fetch_assoc():false);if(!$K)$K=array($l->primary=>"");}if($K){foreach($K
as$x=>$X){if(!$Z)$K[$x]=null;$o[$x]=array("field"=>$x,"null"=>($x!=$l->primary),"auto_increment"=>($x==$l->primary));}}}if($K===false)echo"<p class='error'>".'No rows.'."\n";echo'
<div id="message"></div>

<form action="" method="post" enctype="multipart/form-data" id="form">
';if(!$o)echo"<p class='error'>".'You have no privileges to update this table.'."\n";else{echo"<table cellspacing='0' onkeydown='return editingKeydown(event);'>\n";foreach($o
as$C=>$n){echo"<tr><th>".$b->fieldName($n);$Hb=$_GET["set"][bracket_escape($C)];if($Hb===null){$Hb=$n["default"];if($n["type"]=="bit"&&preg_match("~^b'([01]*)'\$~",$Hb,$Nf))$Hb=$Nf[1];}$Y=($K!==null?($K[$C]!=""&&$w=="sql"&&preg_match("~enum|set~",$n["type"])?(is_array($K[$C])?array_sum($K[$C]):+$K[$C]):$K[$C]):(!$zh&&$n["auto_increment"]?"":(isset($_GET["select"])?false:$Hb)));if(!$_POST["save"]&&is_string($Y))$Y=$b->editVal($Y,$n);$q=($_POST["save"]?(string)$_POST["function"][$C]:($zh&&$n["on_update"]=="CURRENT_TIMESTAMP"?"now":($Y===false?null:($Y!==null?'':'NULL'))));if(preg_match("~time~",$n["type"])&&$Y=="CURRENT_TIMESTAMP"){$Y="";$q="now";}input($n,$Y,$q);echo"\n";}if(!support("table"))echo"<tr>"."<th><input name='field_keys[]' onkeyup='keyupChange.call(this);' onchange='fieldChange(this);' value=''>"."<td class='function'>".html_select("field_funs[]",$b->editFunctions(array("null"=>isset($_GET["select"]))))."<td><input name='field_vals[]'>"."\n";echo"</table>\n";}echo'<p>
';if($o){echo"<input type='submit' value='".'Save'."'>\n";if(!isset($_GET["select"]))echo"<input type='submit' name='insert' value='".($zh?'Save and continue edit'."' onclick='return !ajaxForm(this.form, \"".'Saving'.'...", this)':'Save and insert next')."' title='Ctrl+Shift+Enter'>\n";}echo($zh?"<input type='submit' name='delete' value='".'Delete'."'".confirm().">\n":($_POST||!$o?"":"<script type='text/javascript'>focus(document.getElementById('form').getElementsByTagName('td')[1].firstChild);</script>\n"));if(isset($_GET["select"]))hidden_fields(array("check"=>(array)$_POST["check"],"clone"=>$_POST["clone"],"all"=>$_POST["all"]));echo'<input type="hidden" name="referer" value="',h(isset($_POST["referer"])?$_POST["referer"]:$_SERVER["HTTP_REFERER"]),'">
<input type="hidden" name="save" value="1">
<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["create"])){$a=$_GET["create"];$bf=array();foreach(array('HASH','LINEAR HASH','KEY','LINEAR KEY','RANGE','LIST')as$x)$bf[$x]=$x;$Kf=referencable_primary($a);$Kc=array();foreach($Kf
as$Hg=>$n)$Kc[str_replace("`","``",$Hg)."`".str_replace("`","``",$n["field"])]=$Hg;$Se=array();$R=array();if($a!=""){$Se=fields($a);$R=table_status($a);if(!$R)$m='No tables.';}$K=$_POST;$K["fields"]=(array)$K["fields"];if($K["auto_increment_col"])$K["fields"][$K["auto_increment_col"]]["auto_increment"]=true;if($_POST&&!process_fields($K["fields"])&&!$m){if($_POST["drop"])queries_redirect(substr(ME,0,-1),'Table has been dropped.',drop_tables(array($a)));else{$o=array();$Ba=array();$Bh=false;$Ic=array();ksort($K["fields"]);$Re=reset($Se);$za=" FIRST";foreach($K["fields"]as$x=>$n){$p=$Kc[$n["type"]];$ph=($p!==null?$Kf[$p]:$n);if($n["field"]!=""){if(!$n["has_default"])$n["default"]=null;if($x==$K["auto_increment_col"])$n["auto_increment"]=true;$zf=process_field($n,$ph);$Ba[]=array($n["orig"],$zf,$za);if($zf!=process_field($Re,$Re)){$o[]=array($n["orig"],$zf,$za);if($n["orig"]!=""||$za)$Bh=true;}if($p!==null)$Ic[idf_escape($n["field"])]=($a!=""&&$w!="sqlite"?"ADD":" ").format_foreign_key(array('table'=>$Kc[$n["type"]],'source'=>array($n["field"]),'target'=>array($ph["field"]),'on_delete'=>$n["on_delete"],));$za=" AFTER ".idf_escape($n["field"]);}elseif($n["orig"]!=""){$Bh=true;$o[]=array($n["orig"]);}if($n["orig"]!=""){$Re=next($Se);if(!$Re)$za="";}}$df="";if($bf[$K["partition_by"]]){$ef=array();if($K["partition_by"]=='RANGE'||$K["partition_by"]=='LIST'){foreach(array_filter($K["partition_names"])as$x=>$X){$Y=$K["partition_values"][$x];$ef[]="\n  PARTITION ".idf_escape($X)." VALUES ".($K["partition_by"]=='RANGE'?"LESS THAN":"IN").($Y!=""?" ($Y)":" MAXVALUE");}}$df.="\nPARTITION BY $K[partition_by]($K[partition])".($ef?" (".implode(",",$ef)."\n)":($K["partitions"]?" PARTITIONS ".(+$K["partitions"]):""));}elseif(support("partitioning")&&preg_match("~partitioned~",$R["Create_options"]))$df.="\nREMOVE PARTITIONING";$ee='Table has been altered.';if($a==""){cookie("adminer_engine",$K["Engine"]);$ee='Table has been created.';}$C=trim($K["name"]);queries_redirect(ME.(support("table")?"table=":"select=").urlencode($C),$ee,alter_table($a,$C,($w=="sqlite"&&($Bh||$Ic)?$Ba:$o),$Ic,$K["Comment"],($K["Engine"]&&$K["Engine"]!=$R["Engine"]?$K["Engine"]:""),($K["Collation"]&&$K["Collation"]!=$R["Collation"]?$K["Collation"]:""),($K["Auto_increment"]!=""?+$K["Auto_increment"]:""),$df));}}page_header(($a!=""?'Alter table':'Create table'),$m,array("table"=>$a),h($a));if(!$_POST){$K=array("Engine"=>$_COOKIE["adminer_engine"],"fields"=>array(array("field"=>"","type"=>(isset($rh["int"])?"int":(isset($rh["integer"])?"integer":"")))),"partition_names"=>array(""),);if($a!=""){$K=$R;$K["name"]=$a;$K["fields"]=array();if(!$_GET["auto_increment"])$K["Auto_increment"]="";foreach($Se
as$n){$n["has_default"]=isset($n["default"]);$K["fields"][]=$n;}if(support("partitioning")){$Pc="FROM information_schema.PARTITIONS WHERE TABLE_SCHEMA = ".q(DB)." AND TABLE_NAME = ".q($a);$I=$g->query("SELECT PARTITION_METHOD, PARTITION_ORDINAL_POSITION, PARTITION_EXPRESSION $Pc ORDER BY PARTITION_ORDINAL_POSITION DESC LIMIT 1");list($K["partition_by"],$K["partitions"],$K["partition"])=$I->fetch_row();$ef=get_key_vals("SELECT PARTITION_NAME, PARTITION_DESCRIPTION $Pc AND PARTITION_NAME != '' ORDER BY PARTITION_ORDINAL_POSITION");$ef[""]="";$K["partition_names"]=array_keys($ef);$K["partition_values"]=array_values($ef);}}}$ib=collations();$jc=engines();foreach($jc
as$ic){if(!strcasecmp($ic,$K["Engine"])){$K["Engine"]=$ic;break;}}echo'
<form action="" method="post" id="form">
<p>
';if(support("columns")||$a==""){echo'Table name: <input name="name" maxlength="64" value="',h($K["name"]),'" autocapitalize="off">
';if($a==""&&!$_POST){?><script type='text/javascript'>focus(document.getElementById('form')['name']);</script><?php }echo($jc?"<select name='Engine' onchange='helpClose();'".on_help("getTarget(event).value",1).">".optionlist(array(""=>"(".'engine'.")")+$jc,$K["Engine"])."</select>":""),' ',($ib&&!preg_match("~sqlite|mssql~",$w)?html_select("Collation",array(""=>"(".'collation'.")")+$ib,$K["Collation"]):""),' <input type="submit" value="Save">
';}echo'
';if(support("columns")){echo'<table cellspacing="0" id="edit-fields" class="nowrap">
';$nb=($_POST?$_POST["comments"]:$K["Comment"]!="");if(!$_POST&&!$nb){foreach($K["fields"]as$n){if($n["comment"]!=""){$nb=true;break;}}}edit_fields($K["fields"],$ib,"TABLE",$Kc,$nb);echo'</table>
<p>
Auto Increment: <input type="number" name="Auto_increment" size="6" value="',h($K["Auto_increment"]),'">
',checkbox("defaults",1,true,'Default values',"columnShow(this.checked, 5)","jsonly");if(!$_POST["defaults"]){echo'<script type="text/javascript">editingHideDefaults()</script>';}echo(support("comment")?"<label><input type='checkbox' name='comments' value='1' class='jsonly' onclick=\"columnShow(this.checked, 6); toggle('Comment'); if (this.checked) this.form['Comment'].focus();\"".($nb?" checked":"").">".'Comment'."</label>".' <input name="Comment" id="Comment" value="'.h($K["Comment"]).'" maxlength="'.($g->server_info>=5.5?2048:60).'"'.($nb?'':' class="hidden"').'>':''),'<p>
<input type="submit" value="Save">
';}echo'
';if($a!=""){echo'<input type="submit" name="drop" value="Drop"',confirm(),'>';}if(support("partitioning")){$cf=preg_match('~RANGE|LIST~',$K["partition_by"]);print_fieldset("partition",'Partition by',$K["partition_by"]);echo'<p>
',"<select name='partition_by' onchange='partitionByChange(this);'".on_help("getTarget(event).value.replace(/./, 'PARTITION BY \$&')",1).">".optionlist(array(""=>"")+$bf,$K["partition_by"])."</select>",'(<input name="partition" value="',h($K["partition"]),'">)
Partitions: <input type="number" name="partitions" class="size',($cf||!$K["partition_by"]?" hidden":""),'" value="',h($K["partitions"]),'">
<table cellspacing="0" id="partition-table"',($cf?"":" class='hidden'"),'>
<thead><tr><th>Partition name<th>Values</thead>
';foreach($K["partition_names"]as$x=>$X){echo'<tr>','<td><input name="partition_names[]" value="'.h($X).'"'.($x==count($K["partition_names"])-1?' onchange="partitionNameChange(this);"':'').' autocapitalize="off">','<td><input name="partition_values[]" value="'.h($K["partition_values"][$x]).'">';}echo'</table>
</div></fieldset>
';}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["indexes"])){$a=$_GET["indexes"];$ld=array("PRIMARY","UNIQUE","INDEX");$R=table_status($a,true);if(preg_match('~MyISAM|M?aria'.($g->server_info>=5.6?'|InnoDB':'').'~i',$R["Engine"]))$ld[]="FULLTEXT";$v=indexes($a);$sf=array();if($w=="mongo"){$sf=$v["_id_"];unset($ld[0]);unset($v["_id_"]);}$K=$_POST;if($_POST&&!$m&&!$_POST["add"]&&!$_POST["drop_col"]){$c=array();foreach($K["indexes"]as$u){$C=$u["name"];if(in_array($u["type"],$ld)){$f=array();$Od=array();$Lb=array();$O=array();ksort($u["columns"]);foreach($u["columns"]as$x=>$e){if($e!=""){$y=$u["lengths"][$x];$Kb=$u["descs"][$x];$O[]=idf_escape($e).($y?"(".(+$y).")":"").($Kb?" DESC":"");$f[]=$e;$Od[]=($y?$y:null);$Lb[]=$Kb;}}if($f){$tc=$v[$C];if($tc){ksort($tc["columns"]);ksort($tc["lengths"]);ksort($tc["descs"]);if($u["type"]==$tc["type"]&&array_values($tc["columns"])===$f&&(!$tc["lengths"]||array_values($tc["lengths"])===$Od)&&array_values($tc["descs"])===$Lb){unset($v[$C]);continue;}}$c[]=array($u["type"],$C,$O);}}}foreach($v
as$C=>$tc)$c[]=array($tc["type"],$C,"DROP");if(!$c)redirect(ME."table=".urlencode($a));queries_redirect(ME."table=".urlencode($a),'Indexes have been altered.',alter_indexes($a,$c));}page_header('Indexes',$m,array("table"=>$a),h($a));$o=array_keys(fields($a));if($_POST["add"]){foreach($K["indexes"]as$x=>$u){if($u["columns"][count($u["columns"])]!="")$K["indexes"][$x]["columns"][]="";}$u=end($K["indexes"]);if($u["type"]||array_filter($u["columns"],'strlen'))$K["indexes"][]=array("columns"=>array(1=>""));}if(!$K){foreach($v
as$x=>$u){$v[$x]["name"]=$x;$v[$x]["columns"][]="";}$v[]=array("columns"=>array(1=>""));$K["indexes"]=$v;}?>

<form action="" method="post">
<table cellspacing="0" class="nowrap">
<thead><tr>
<th>Index Type
<th><input type="submit" style="left: -1000px; position: absolute;">Column (length)
<th>Name
<th><noscript><input type='image' class='icon' name='add[0]' src='" . h(preg_replace("~\\?.*~", "", ME)) . "?file=plus.gif&amp;version=4.0.3' alt='+' title='Add next'></noscript>&nbsp;
</thead>
<?php
if($sf){echo"<tr><td>PRIMARY<td>";foreach($sf["columns"]as$x=>$e){echo
select_input(" disabled",$o,$e),"<label><input disabled type='checkbox'>".'descending'."</label> ";}echo"<td><td>\n";}$zd=1;foreach($K["indexes"]as$u){if(!$_POST["drop_col"]||$zd!=key($_POST["drop_col"])){echo"<tr><td>".html_select("indexes[$zd][type]",array(-1=>"")+$ld,$u["type"],($zd==count($K["indexes"])?"indexesAddRow(this);":1)),"<td>";ksort($u["columns"]);$r=1;foreach($u["columns"]as$x=>$e){echo"<span>".select_input(" name='indexes[$zd][columns][$r]' onchange=\"".($r==count($u["columns"])?"indexesAddColumn":"indexesChangeColumn")."(this, '".js_escape($w=="sql"?"":$_GET["indexes"]."_")."');\"",($o?array_combine($o,$o):$o),$e),($w=="sql"||$w=="mssql"?"<input type='number' name='indexes[$zd][lengths][$r]' class='size' value='".h($u["lengths"][$x])."'>":""),($w!="sql"?checkbox("indexes[$zd][descs][$r]",1,$u["descs"][$x],'descending'):"")," </span>";$r++;}echo"<td><input name='indexes[$zd][name]' value='".h($u["name"])."' autocapitalize='off'>\n","<td><input type='image' class='icon' name='drop_col[$zd]' src='".h(preg_replace("~\\?.*~","",ME))."?file=cross.gif&amp;version=4.0.3' alt='x' title='".'Remove'."' onclick=\"return !editingRemoveRow(this, 'indexes\$1[type]');\">\n";}$zd++;}echo'</table>
<p>
<input type="submit" value="Save">
<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["database"])){$K=$_POST;if($_POST&&!$m&&!isset($_POST["add_x"])){restart_session();$C=trim($K["name"]);if($_POST["drop"]){$_GET["db"]="";queries_redirect(remove_from_uri("db|database"),'Database has been dropped.',drop_databases(array(DB)));}elseif(DB!==$C){if(DB!=""){$_GET["db"]=$C;queries_redirect(preg_replace('~\bdb=[^&]*&~','',ME)."db=".urlencode($C),'Database has been renamed.',rename_database($C,$K["collation"]));}else{$j=explode("\n",str_replace("\r","",$C));$Bg=true;$Id="";foreach($j
as$k){if(count($j)==1||$k!=""){if(!create_database($k,$K["collation"]))$Bg=false;$Id=$k;}}queries_redirect(ME."db=".urlencode($Id),'Database has been created.',$Bg);}}else{if(!$K["collation"])redirect(substr(ME,0,-1));query_redirect("ALTER DATABASE ".idf_escape($C).(preg_match('~^[a-z0-9_]+$~i',$K["collation"])?" COLLATE $K[collation]":""),substr(ME,0,-1),'Database has been altered.');}}page_header(DB!=""?'Alter database':'Create database',$m,array(),h(DB));$ib=collations();$C=DB;if($_POST)$C=$K["name"];elseif(DB!="")$K["collation"]=db_collation(DB,$ib);elseif($w=="sql"){foreach(get_vals("SHOW GRANTS")as$Sc){if(preg_match('~ ON (`(([^\\\\`]|``|\\\\.)*)%`\\.\\*)?~',$Sc,$B)&&$B[1]){$C=stripcslashes(idf_unescape("`$B[2]`"));break;}}}echo'
<form action="" method="post">
<p>
',($_POST["add_x"]||strpos($C,"\n")?'<textarea id="name" name="name" rows="10" cols="40">'.h($C).'</textarea><br>':'<input name="name" id="name" value="'.h($C).'" maxlength="64" autocapitalize="off">')."\n".($ib?html_select("collation",array(""=>"(".'collation'.")")+$ib,$K["collation"]).doc_link(array('sql'=>"charset-charsets.html",'mssql'=>"ms187963.aspx",)):"");?>
<script type='text/javascript'>focus(document.getElementById('name'));</script>
<input type="submit" value="Save">
<?php
if(DB!="")echo"<input type='submit' name='drop' value='".'Drop'."'".confirm().">\n";elseif(!$_POST["add_x"]&&$_GET["db"]=="")echo"<input type='image' class='icon' name='add' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=4.0.3' alt='+' title='".'Add next'."'>\n";echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["scheme"])){$K=$_POST;if($_POST&&!$m){$_=preg_replace('~ns=[^&]*&~','',ME)."ns=";if($_POST["drop"])query_redirect("DROP SCHEMA ".idf_escape($_GET["ns"]),$_,'Schema has been dropped.');else{$C=trim($K["name"]);$_.=urlencode($C);if($_GET["ns"]=="")query_redirect("CREATE SCHEMA ".idf_escape($C),$_,'Schema has been created.');elseif($_GET["ns"]!=$C)query_redirect("ALTER SCHEMA ".idf_escape($_GET["ns"])." RENAME TO ".idf_escape($C),$_,'Schema has been altered.');else
redirect($_);}}page_header($_GET["ns"]!=""?'Alter schema':'Create schema',$m);if(!$K)$K["name"]=$_GET["ns"];echo'
<form action="" method="post">
<p><input name="name" id="name" value="',h($K["name"]);?>" autocapitalize="off">
<script type='text/javascript'>focus(document.getElementById('name'));</script>
<input type="submit" value="Save">
<?php
if($_GET["ns"]!="")echo"<input type='submit' name='drop' value='".'Drop'."'".confirm().">\n";echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["call"])){$da=$_GET["call"];page_header('Call'.": ".h($da),$m);$Xf=routine($da,(isset($_GET["callf"])?"FUNCTION":"PROCEDURE"));$jd=array();$Ve=array();foreach($Xf["fields"]as$r=>$n){if(substr($n["inout"],-3)=="OUT")$Ve[$r]="@".idf_escape($n["field"])." AS ".idf_escape($n["field"]);if(!$n["inout"]||substr($n["inout"],0,2)=="IN")$jd[]=$r;}if(!$m&&$_POST){$Wa=array();foreach($Xf["fields"]as$x=>$n){if(in_array($x,$jd)){$X=process_input($n);if($X===false)$X="''";if(isset($Ve[$x]))$g->query("SET @".idf_escape($n["field"])." = $X");}$Wa[]=(isset($Ve[$x])?"@".idf_escape($n["field"]):$X);}$H=(isset($_GET["callf"])?"SELECT":"CALL")." ".idf_escape($da)."(".implode(", ",$Wa).")";echo"<p><code class='jush-$w'>".h($H)."</code> <a href='".h(ME)."sql=".urlencode($H)."'>".'Edit'."</a>\n";if(!$g->multi_query($H))echo"<p class='error'>".error()."\n";else{$h=connect();if(is_object($h))$h->select_db(DB);do{$I=$g->store_result();if(is_object($I))select($I,$h);else
echo"<p class='message'>".lang(array('Routine has been called, %d row affected.','Routine has been called, %d rows affected.'),$g->affected_rows)."\n";}while($g->next_result());if($Ve)select($g->query("SELECT ".implode(", ",$Ve)));}}echo'
<form action="" method="post">
';if($jd){echo"<table cellspacing='0'>\n";foreach($jd
as$x){$n=$Xf["fields"][$x];$C=$n["field"];echo"<tr><th>".$b->fieldName($n);$Y=$_POST["fields"][$C];if($Y!=""){if($n["type"]=="enum")$Y=+$Y;if($n["type"]=="set")$Y=array_sum($Y);}input($n,$Y,(string)$_POST["function"][$C]);echo"\n";}echo"</table>\n";}echo'<p>
<input type="submit" value="Call">
<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["foreign"])){$a=$_GET["foreign"];$C=$_GET["name"];$K=$_POST;if($_POST&&!$m&&!$_POST["add"]&&!$_POST["change"]&&!$_POST["change-js"]){$ee=($_POST["drop"]?'Foreign key has been dropped.':($C!=""?'Foreign key has been altered.':'Foreign key has been created.'));$A=ME."table=".urlencode($a);$K["source"]=array_filter($K["source"],'strlen');ksort($K["source"]);$Pg=array();foreach($K["source"]as$x=>$X)$Pg[$x]=$K["target"][$x];$K["target"]=$Pg;if($w=="sqlite")queries_redirect($A,$ee,recreate_table($a,$a,array(),array(),array(" $C"=>($_POST["drop"]?"":" ".format_foreign_key($K)))));else{$c="ALTER TABLE ".table($a);$Tb="\nDROP ".($w=="sql"?"FOREIGN KEY ":"CONSTRAINT ").idf_escape($C);if($_POST["drop"])query_redirect($c.$Tb,$A,$ee);else{query_redirect($c.($C!=""?"$Tb,":"")."\nADD".format_foreign_key($K),$A,$ee);$m='Source and target columns must have the same data type, there must be an index on the target columns and referenced data must exist.'."<br>$m";}}}page_header('Foreign key',$m,array("table"=>$a),h($a));if($_POST){ksort($K["source"]);if($_POST["add"])$K["source"][]="";elseif($_POST["change"]||$_POST["change-js"])$K["target"]=array();}elseif($C!=""){$Kc=foreign_keys($a);$K=$Kc[$C];$K["source"][]="";}else{$K["table"]=$a;$K["source"]=array("");}$sg=array_keys(fields($a));$Pg=($a===$K["table"]?$sg:array_keys(fields($K["table"])));$Jf=array_keys(array_filter(table_status('',true),'fk_support'));echo'
<form action="" method="post">
<p>
';if($K["db"]==""&&$K["ns"]==""){echo'Target table:
',html_select("table",$Jf,$K["table"],"this.form['change-js'].value = '1'; this.form.submit();"),'<input type="hidden" name="change-js" value="">
<noscript><p><input type="submit" name="change" value="Change"></noscript>
<table cellspacing="0">
<thead><tr><th>Source<th>Target</thead>
';$zd=0;foreach($K["source"]as$x=>$X){echo"<tr>","<td>".html_select("source[".(+$x)."]",array(-1=>"")+$sg,$X,($zd==count($K["source"])-1?"foreignAddRow(this);":1)),"<td>".html_select("target[".(+$x)."]",$Pg,$K["target"][$x]);$zd++;}echo'</table>
<p>
ON DELETE: ',html_select("on_delete",array(-1=>"")+explode("|",$De),$K["on_delete"]),' ON UPDATE: ',html_select("on_update",array(-1=>"")+explode("|",$De),$K["on_update"]),doc_link(array('sql'=>"innodb-foreign-key-constraints.html",'pgsql'=>"sql-createtable.html#SQL-CREATETABLE-REFERENCES",'mssql'=>"ms174979.aspx",'oracle'=>"clauses002.htm#sthref2903",)),'<p>
<input type="submit" value="Save">
<noscript><p><input type="submit" name="add" value="Add column"></noscript>
';}if($C!=""){echo'<input type="submit" name="drop" value="Drop"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["view"])){$a=$_GET["view"];$K=$_POST;if($_POST&&!$m){$C=trim($K["name"]);$Ea=" AS\n$K[select]";$A=ME."table=".urlencode($C);$ee='View has been altered.';if(!$_POST["drop"]&&$a==$C&&$w!="sqlite")query_redirect(($w=="mssql"?"ALTER":"CREATE OR REPLACE")." VIEW ".table($C).$Ea,$A,$ee);else{$Rg=$C."_adminer_".uniqid();drop_create("DROP VIEW ".table($a),"CREATE VIEW ".table($C).$Ea,"DROP VIEW ".table($C),"CREATE VIEW ".table($Rg).$Ea,"DROP VIEW ".table($Rg),($_POST["drop"]?substr(ME,0,-1):$A),'View has been dropped.',$ee,'View has been created.',$a,$C);}}if(!$_POST&&$a!=""){$K=view($a);$K["name"]=$a;if(!$m)$m=$g->error;}page_header(($a!=""?'Alter view':'Create view'),$m,array("table"=>$a),h($a));echo'
<form action="" method="post">
<p>Name: <input name="name" value="',h($K["name"]),'" maxlength="64" autocapitalize="off">
<p>';textarea("select",$K["select"]);echo'<p>
<input type="submit" value="Save">
';if($_GET["view"]!=""){echo'<input type="submit" name="drop" value="Drop"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["event"])){$aa=$_GET["event"];$td=array("YEAR","QUARTER","MONTH","DAY","HOUR","MINUTE","WEEK","SECOND","YEAR_MONTH","DAY_HOUR","DAY_MINUTE","DAY_SECOND","HOUR_MINUTE","HOUR_SECOND","MINUTE_SECOND");$yg=array("ENABLED"=>"ENABLE","DISABLED"=>"DISABLE","SLAVESIDE_DISABLED"=>"DISABLE ON SLAVE");$K=$_POST;if($_POST&&!$m){if($_POST["drop"])query_redirect("DROP EVENT ".idf_escape($aa),substr(ME,0,-1),'Event has been dropped.');elseif(in_array($K["INTERVAL_FIELD"],$td)&&isset($yg[$K["STATUS"]])){$cg="\nON SCHEDULE ".($K["INTERVAL_VALUE"]?"EVERY ".q($K["INTERVAL_VALUE"])." $K[INTERVAL_FIELD]".($K["STARTS"]?" STARTS ".q($K["STARTS"]):"").($K["ENDS"]?" ENDS ".q($K["ENDS"]):""):"AT ".q($K["STARTS"]))." ON COMPLETION".($K["ON_COMPLETION"]?"":" NOT")." PRESERVE";queries_redirect(substr(ME,0,-1),($aa!=""?'Event has been altered.':'Event has been created.'),queries(($aa!=""?"ALTER EVENT ".idf_escape($aa).$cg.($aa!=$K["EVENT_NAME"]?"\nRENAME TO ".idf_escape($K["EVENT_NAME"]):""):"CREATE EVENT ".idf_escape($K["EVENT_NAME"]).$cg)."\n".$yg[$K["STATUS"]]." COMMENT ".q($K["EVENT_COMMENT"]).rtrim(" DO\n$K[EVENT_DEFINITION]",";").";"));}}page_header(($aa!=""?'Alter event'.": ".h($aa):'Create event'),$m);if(!$K&&$aa!=""){$L=get_rows("SELECT * FROM information_schema.EVENTS WHERE EVENT_SCHEMA = ".q(DB)." AND EVENT_NAME = ".q($aa));$K=reset($L);}echo'
<form action="" method="post">
<table cellspacing="0">
<tr><th>Name<td><input name="EVENT_NAME" value="',h($K["EVENT_NAME"]),'" maxlength="64" autocapitalize="off">
<tr><th title="datetime">Start<td><input name="STARTS" value="',h("$K[EXECUTE_AT]$K[STARTS]"),'">
<tr><th title="datetime">End<td><input name="ENDS" value="',h($K["ENDS"]),'">
<tr><th>Every<td><input type="number" name="INTERVAL_VALUE" value="',h($K["INTERVAL_VALUE"]),'" class="size"> ',html_select("INTERVAL_FIELD",$td,$K["INTERVAL_FIELD"]),'<tr><th>Status<td>',html_select("STATUS",$yg,$K["STATUS"]),'<tr><th>Comment<td><input name="EVENT_COMMENT" value="',h($K["EVENT_COMMENT"]),'" maxlength="64">
<tr><th>&nbsp;<td>',checkbox("ON_COMPLETION","PRESERVE",$K["ON_COMPLETION"]=="PRESERVE",'On completion preserve'),'</table>
<p>';textarea("EVENT_DEFINITION",$K["EVENT_DEFINITION"]);echo'<p>
<input type="submit" value="Save">
';if($aa!=""){echo'<input type="submit" name="drop" value="Drop"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["procedure"])){$da=$_GET["procedure"];$Xf=(isset($_GET["function"])?"FUNCTION":"PROCEDURE");$K=$_POST;$K["fields"]=(array)$K["fields"];if($_POST&&!process_fields($K["fields"])&&!$m){$Rg="$K[name]_adminer_".uniqid();drop_create("DROP $Xf ".idf_escape($da),create_routine($Xf,$K),"DROP $Xf ".idf_escape($K["name"]),create_routine($Xf,array("name"=>$Rg)+$K),"DROP $Xf ".idf_escape($Rg),substr(ME,0,-1),'Routine has been dropped.','Routine has been altered.','Routine has been created.',$da,$K["name"]);}page_header(($da!=""?(isset($_GET["function"])?'Alter function':'Alter procedure').": ".h($da):(isset($_GET["function"])?'Create function':'Create procedure')),$m);if(!$_POST&&$da!=""){$K=routine($da,$Xf);$K["name"]=$da;}$ib=get_vals("SHOW CHARACTER SET");sort($ib);$Yf=routine_languages();echo'
<form action="" method="post" id="form">
<p>Name: <input name="name" value="',h($K["name"]),'" maxlength="64" autocapitalize="off">
',($Yf?'Language'.": ".html_select("language",$Yf,$K["language"]):""),'<input type="submit" value="Save">
<table cellspacing="0" class="nowrap">
';edit_fields($K["fields"],$ib,$Xf);if(isset($_GET["function"])){echo"<tr><td>".'Return type';edit_type("returns",$K["returns"],$ib);}echo'</table>
<p>';textarea("definition",$K["definition"]);echo'<p>
<input type="submit" value="Save">
';if($da!=""){echo'<input type="submit" name="drop" value="Drop"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["sequence"])){$fa=$_GET["sequence"];$K=$_POST;if($_POST&&!$m){$_=substr(ME,0,-1);$C=trim($K["name"]);if($_POST["drop"])query_redirect("DROP SEQUENCE ".idf_escape($fa),$_,'Sequence has been dropped.');elseif($fa=="")query_redirect("CREATE SEQUENCE ".idf_escape($C),$_,'Sequence has been created.');elseif($fa!=$C)query_redirect("ALTER SEQUENCE ".idf_escape($fa)." RENAME TO ".idf_escape($C),$_,'Sequence has been altered.');else
redirect($_);}page_header($fa!=""?'Alter sequence'.": ".h($fa):'Create sequence',$m);if(!$K)$K["name"]=$fa;echo'
<form action="" method="post">
<p><input name="name" value="',h($K["name"]),'" autocapitalize="off">
<input type="submit" value="Save">
';if($fa!="")echo"<input type='submit' name='drop' value='".'Drop'."'".confirm().">\n";echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["type"])){$ga=$_GET["type"];$K=$_POST;if($_POST&&!$m){$_=substr(ME,0,-1);if($_POST["drop"])query_redirect("DROP TYPE ".idf_escape($ga),$_,'Type has been dropped.');else
query_redirect("CREATE TYPE ".idf_escape(trim($K["name"]))." $K[as]",$_,'Type has been created.');}page_header($ga!=""?'Alter type'.": ".h($ga):'Create type',$m);if(!$K)$K["as"]="AS ";echo'
<form action="" method="post">
<p>
';if($ga!="")echo"<input type='submit' name='drop' value='".'Drop'."'".confirm().">\n";else{echo"<input name='name' value='".h($K['name'])."' autocapitalize='off'>\n";textarea("as",$K["as"]);echo"<p><input type='submit' value='".'Save'."'>\n";}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["trigger"])){$a=$_GET["trigger"];$C=$_GET["name"];$nh=trigger_options();$lh=array("INSERT","UPDATE","DELETE");$K=(array)trigger($C)+array("Trigger"=>$a."_bi");if($_POST){if(!$m&&in_array($_POST["Timing"],$nh["Timing"])&&in_array($_POST["Event"],$lh)&&in_array($_POST["Type"],$nh["Type"])){$Ce=" ON ".table($a);$Tb="DROP TRIGGER ".idf_escape($C).($w=="pgsql"?$Ce:"");$A=ME."table=".urlencode($a);if($_POST["drop"])query_redirect($Tb,$A,'Trigger has been dropped.');else{if($C!="")queries($Tb);queries_redirect($A,($C!=""?'Trigger has been altered.':'Trigger has been created.'),queries(create_trigger($Ce,$_POST)));if($C!="")queries(create_trigger($Ce,$K+array("Type"=>reset($nh["Type"]))));}}$K=$_POST;}page_header(($C!=""?'Alter trigger'.": ".h($C):'Create trigger'),$m,array("table"=>$a));echo'
<form action="" method="post" id="form">
<table cellspacing="0">
<tr><th>Time<td>',html_select("Timing",$nh["Timing"],$K["Timing"],"if (/^".preg_quote($a,"/")."_[ba][iud]$/.test(this.form['Trigger'].value)) this.form['Trigger'].value = '".js_escape($a)."_' + selectValue(this).charAt(0).toLowerCase() + selectValue(this.form['Event']).charAt(0).toLowerCase();"),'<tr><th>Event<td>',html_select("Event",$lh,$K["Event"],"this.form['Timing'].onchange();"),'<tr><th>Type<td>',html_select("Type",$nh["Type"],$K["Type"]),'</table>
<p>Name: <input name="Trigger" value="',h($K["Trigger"]),'" maxlength="64" autocapitalize="off">
<p>';textarea("Statement",$K["Statement"]);echo'<p>
<input type="submit" value="Save">
';if($C!=""){echo'<input type="submit" name="drop" value="Drop"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["user"])){$ha=$_GET["user"];$xf=array(""=>array("All privileges"=>""));foreach(get_rows("SHOW PRIVILEGES")as$K){foreach(explode(",",($K["Privilege"]=="Grant option"?"":$K["Context"]))as$tb)$xf[$tb][$K["Privilege"]]=$K["Comment"];}$xf["Server Admin"]+=$xf["File access on server"];$xf["Databases"]["Create routine"]=$xf["Procedures"]["Create routine"];unset($xf["Procedures"]["Create routine"]);$xf["Columns"]=array();foreach(array("Select","Insert","Update","References")as$X)$xf["Columns"][$X]=$xf["Tables"][$X];unset($xf["Server Admin"]["Usage"]);foreach($xf["Tables"]as$x=>$X)unset($xf["Databases"][$x]);$re=array();if($_POST){foreach($_POST["objects"]as$x=>$X)$re[$X]=(array)$re[$X]+(array)$_POST["grants"][$x];}$Tc=array();$Ae="";if(isset($_GET["host"])&&($I=$g->query("SHOW GRANTS FOR ".q($ha)."@".q($_GET["host"])))){while($K=$I->fetch_row()){if(preg_match('~GRANT (.*) ON (.*) TO ~',$K[0],$B)&&preg_match_all('~ *([^(,]*[^ ,(])( *\\([^)]+\\))?~',$B[1],$Wd,PREG_SET_ORDER)){foreach($Wd
as$X){if($X[1]!="USAGE")$Tc["$B[2]$X[2]"][$X[1]]=true;if(preg_match('~ WITH GRANT OPTION~',$K[0]))$Tc["$B[2]$X[2]"]["GRANT OPTION"]=true;}}if(preg_match("~ IDENTIFIED BY PASSWORD '([^']+)~",$K[0],$B))$Ae=$B[1];}}if($_POST&&!$m){$Be=(isset($_GET["host"])?q($ha)."@".q($_GET["host"]):"''");if($_POST["drop"])query_redirect("DROP USER $Be",ME."privileges=",'User has been dropped.');else{$te=q($_POST["user"])."@".q($_POST["host"]);$ff=$_POST["pass"];if($ff!=''&&!$_POST["hashed"]){$ff=$g->result("SELECT PASSWORD(".q($ff).")");$m=!$ff;}$zb=false;if(!$m){if($Be!=$te){$zb=queries(($g->server_info<5?"GRANT USAGE ON *.* TO":"CREATE USER")." $te IDENTIFIED BY PASSWORD ".q($ff));$m=!$zb;}elseif($ff!=$Ae)queries("SET PASSWORD FOR $te = ".q($ff));}if(!$m){$Uf=array();foreach($re
as$xe=>$Sc){if(isset($_GET["grant"]))$Sc=array_filter($Sc);$Sc=array_keys($Sc);if(isset($_GET["grant"]))$Uf=array_diff(array_keys(array_filter($re[$xe],'strlen')),$Sc);elseif($Be==$te){$ze=array_keys((array)$Tc[$xe]);$Uf=array_diff($ze,$Sc);$Sc=array_diff($Sc,$ze);unset($Tc[$xe]);}if(preg_match('~^(.+)\\s*(\\(.*\\))?$~U',$xe,$B)&&(!grant("REVOKE",$Uf,$B[2]," ON $B[1] FROM $te")||!grant("GRANT",$Sc,$B[2]," ON $B[1] TO $te"))){$m=true;break;}}}if(!$m&&isset($_GET["host"])){if($Be!=$te)queries("DROP USER $Be");elseif(!isset($_GET["grant"])){foreach($Tc
as$xe=>$Uf){if(preg_match('~^(.+)(\\(.*\\))?$~U',$xe,$B))grant("REVOKE",array_keys($Uf),$B[2]," ON $B[1] FROM $te");}}}queries_redirect(ME."privileges=",(isset($_GET["host"])?'User has been altered.':'User has been created.'),!$m);if($zb)$g->query("DROP USER $te");}}page_header((isset($_GET["host"])?'Username'.": ".h("$ha@$_GET[host]"):'Create user'),$m,array("privileges"=>array('','Privileges')));if($_POST){$K=$_POST;$Tc=$re;}else{$K=$_GET+array("host"=>$g->result("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', -1)"));$K["pass"]=$Ae;if($Ae!="")$K["hashed"]=true;$Tc[(DB==""||$Tc?"":idf_escape(addcslashes(DB,"%_\\"))).".*"]=array();}echo'<form action="" method="post">
<table cellspacing="0">
<tr><th>Server<td><input name="host" maxlength="60" value="',h($K["host"]),'" autocapitalize="off">
<tr><th>Username<td><input name="user" maxlength="16" value="',h($K["user"]),'" autocapitalize="off">
<tr><th>Password<td><input name="pass" id="pass" value="',h($K["pass"]),'">
';if(!$K["hashed"]){echo'<script type="text/javascript">typePassword(document.getElementById(\'pass\'));</script>';}echo
checkbox("hashed",1,$K["hashed"],'Hashed',"typePassword(this.form['pass'], this.checked);"),'</table>

';echo"<table cellspacing='0'>\n","<thead><tr><th colspan='2'>".'Privileges'.doc_link(array('sql'=>"grant.html#priv_level"));$r=0;foreach($Tc
as$xe=>$Sc){echo'<th>'.($xe!="*.*"?"<input name='objects[$r]' value='".h($xe)."' size='10' autocapitalize='off'>":"<input type='hidden' name='objects[$r]' value='*.*' size='10'>*.*");$r++;}echo"</thead>\n";foreach(array(""=>"","Server Admin"=>'Server',"Databases"=>'Database',"Tables"=>'Table',"Columns"=>'Column',"Procedures"=>'Routine',)as$tb=>$Kb){foreach((array)$xf[$tb]as$wf=>$mb){echo"<tr".odd()."><td".($Kb?">$Kb<td":" colspan='2'").' lang="en" title="'.h($mb).'">'.h($wf);$r=0;foreach($Tc
as$xe=>$Sc){$C="'grants[$r][".h(strtoupper($wf))."]'";$Y=$Sc[strtoupper($wf)];if($tb=="Server Admin"&&$xe!=(isset($Tc["*.*"])?"*.*":".*"))echo"<td>&nbsp;";elseif(isset($_GET["grant"]))echo"<td><select name=$C><option><option value='1'".($Y?" selected":"").">".'Grant'."<option value='0'".($Y=="0"?" selected":"").">".'Revoke'."</select>";else
echo"<td align='center'><label class='block'><input type='checkbox' name=$C value='1'".($Y?" checked":"").($wf=="All privileges"?" id='grants-$r-all'":($wf=="Grant option"?"":" onclick=\"if (this.checked) formUncheck('grants-$r-all');\""))."></label>";$r++;}}}echo"</table>\n",'<p>
<input type="submit" value="Save">
';if(isset($_GET["host"])){echo'<input type="submit" name="drop" value="Drop"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["processlist"])){if(support("kill")&&$_POST&&!$m){$Fd=0;foreach((array)$_POST["kill"]as$X){if(queries("KILL ".(+$X)))$Fd++;}queries_redirect(ME."processlist=",lang(array('%d process has been killed.','%d processes have been killed.'),$Fd),$Fd||!$_POST["kill"]);}page_header('Process list',$m);echo'
<form action="" method="post">
<table cellspacing="0" onclick="tableClick(event);" ondblclick="tableClick(event, true);" class="nowrap checkable">
';$r=-1;foreach(process_list()as$r=>$K){if(!$r){echo"<thead><tr lang='en'>".(support("kill")?"<th>&nbsp;":"");foreach($K
as$x=>$X)echo"<th>$x".doc_link(array('sql'=>"show-processlist.html#processlist_".strtolower($x),'pgsql'=>"monitoring-stats.html#PG-STAT-ACTIVITY-VIEW",'oracle'=>"../b14237/dynviews_2088.htm",));echo"</thead>\n";}echo"<tr".odd().">".(support("kill")?"<td>".checkbox("kill[]",$K["Id"],0):"");foreach($K
as$x=>$X)echo"<td>".(($w=="sql"&&$x=="Info"&&preg_match("~Query|Killed~",$K["Command"])&&$X!="")||($w=="pgsql"&&$x=="current_query"&&$X!="<IDLE>")||($w=="oracle"&&$x=="sql_text"&&$X!="")?"<code class='jush-$w'>".shorten_utf8($X,100,"</code>").' <a href="'.h(ME.($K["db"]!=""?"db=".urlencode($K["db"])."&":"")."sql=".urlencode($X)).'">'.'Clone'.'</a>':nbsp($X));echo"\n";}echo'</table>
<script type=\'text/javascript\'>tableCheck();</script>
<p>
';if(support("kill")){echo($r+1)."/".sprintf('%d in total',$g->result("SELECT @@max_connections")),"<p><input type='submit' value='".'Kill'."'>\n";}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["select"])){$a=$_GET["select"];$R=table_status1($a);$v=indexes($a);$o=fields($a);$Kc=column_foreign_keys($a);$ye="";if($R["Oid"]){$ye=($w=="sqlite"?"rowid":"oid");$v[]=array("type"=>"PRIMARY","columns"=>array($ye));}parse_str($_COOKIE["adminer_import"],$wa);$Vf=array();$f=array();$Vg=null;foreach($o
as$x=>$n){$C=$b->fieldName($n);if(isset($n["privileges"]["select"])&&$C!=""){$f[$x]=html_entity_decode(strip_tags($C),ENT_QUOTES);if(is_shortable($n))$Vg=$b->selectLengthProcess();}$Vf+=$n["privileges"];}list($M,$Uc)=$b->selectColumnsProcess($f,$v);$ud=count($Uc)<count($M);$Z=$b->selectSearchProcess($o,$v);$Me=$b->selectOrderProcess($o,$v);$z=$b->selectLimitProcess();$Pc=($M?implode(", ",$M):"*".($ye?", $ye":"")).convert_fields($f,$o,$M)."\nFROM ".table($a);$Vc=($Uc&&$ud?"\nGROUP BY ".implode(", ",$Uc):"").($Me?"\nORDER BY ".implode(", ",$Me):"");if($_GET["val"]&&is_ajax()){header("Content-Type: text/plain; charset=utf-8");foreach($_GET["val"]as$vh=>$K){$Ea=convert_field($o[key($K)]);$M=array($Ea?$Ea:idf_escape(key($K)));$Z[]=where_check($vh,$o);$J=$l->select($a,$M,$Z,$M);if($J)echo
reset($J->fetch_row());}exit;}if($_POST&&!$m){$Qh=$Z;if(!$_POST["all"]&&is_array($_POST["check"]))$Qh[]="((".implode(") OR (",array_map('where_check',$_POST["check"]))."))";$Qh=($Qh?"\nWHERE ".implode(" AND ",$Qh):"");$sf=$xh=null;foreach($v
as$u){if($u["type"]=="PRIMARY"){$sf=array_flip($u["columns"]);$xh=($M?$sf:array());break;}}foreach((array)$xh
as$x=>$X){if(in_array(idf_escape($x),$M))unset($xh[$x]);}if($_POST["export"]){cookie("adminer_import","output=".urlencode($_POST["output"])."&format=".urlencode($_POST["format"]));dump_headers($a);$b->dumpTable($a,"");if(!is_array($_POST["check"])||$xh===array())$H="SELECT $Pc$Qh$Vc";else{$th=array();foreach($_POST["check"]as$X)$th[]="(SELECT".limit($Pc,"\nWHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($X,$o).$Vc,1).")";$H=implode(" UNION ALL ",$th);}$b->dumpData($a,"table",$H);exit;}if(!$b->selectEmailProcess($Z,$Kc)){if($_POST["save"]||$_POST["delete"]){$I=true;$xa=0;$O=array();if(!$_POST["delete"]){foreach($f
as$C=>$X){$X=process_input($o[$C]);if($X!==null&&($_POST["clone"]||$X!==false))$O[idf_escape($C)]=($X!==false?$X:idf_escape($C));}}if($_POST["delete"]||$O){if($_POST["clone"])$H="INTO ".table($a)." (".implode(", ",array_keys($O)).")\nSELECT ".implode(", ",$O)."\nFROM ".table($a);if($_POST["all"]||($xh===array()&&is_array($_POST["check"]))||$ud){$I=($_POST["delete"]?$l->delete($a,$Qh):($_POST["clone"]?queries("INSERT $H$Qh"):$l->update($a,$O,$Qh)));$xa=$g->affected_rows;}else{foreach((array)$_POST["check"]as$X){$Ph="\nWHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($X,$o);$I=($_POST["delete"]?$l->delete($a,$Ph,1):($_POST["clone"]?queries("INSERT".limit1($H,$Ph)):$l->update($a,$O,$Ph)));if(!$I)break;$xa+=$g->affected_rows;}}}$ee=lang(array('%d item has been affected.','%d items have been affected.'),$xa);if($_POST["clone"]&&$I&&$xa==1){$Jd=last_id();if($Jd)$ee=sprintf('Item%s has been inserted.'," $Jd");}queries_redirect(remove_from_uri($_POST["all"]&&$_POST["delete"]?"page":""),$ee,$I);}elseif(!$_POST["import"]){if(!$_POST["val"])$m='Ctrl+click on a value to modify it.';else{$I=true;$xa=0;foreach($_POST["val"]as$vh=>$K){$O=array();foreach($K
as$x=>$X){$x=bracket_escape($x,1);$O[idf_escape($x)]=(preg_match('~char|text~',$o[$x]["type"])||$X!=""?$b->processInput($o[$x],$X):"NULL");}$I=$l->update($a,$O," WHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($vh,$o),!($ud||$xh===array())," ");if(!$I)break;$xa+=$g->affected_rows;}queries_redirect(remove_from_uri(),lang(array('%d item has been affected.','%d items have been affected.'),$xa),$I);}}elseif(!is_string($Dc=get_file("csv_file",true)))$m=upload_error($Dc);elseif(!preg_match('~~u',$Dc))$m='File must be in UTF-8 encoding.';else{cookie("adminer_import","output=".urlencode($wa["output"])."&format=".urlencode($_POST["separator"]));$I=true;$jb=array_keys($o);preg_match_all('~(?>"[^"]*"|[^"\\r\\n]+)+~',$Dc,$Wd);$xa=count($Wd[0]);$l->begin();$kg=($_POST["separator"]=="csv"?",":($_POST["separator"]=="tsv"?"\t":";"));$L=array();foreach($Wd[0]as$x=>$X){preg_match_all("~((?>\"[^\"]*\")+|[^$kg]*)$kg~",$X.$kg,$Xd);if(!$x&&!array_diff($Xd[1],$jb)){$jb=$Xd[1];$xa--;}else{$O=array();foreach($Xd[1]as$r=>$gb)$O[idf_escape($jb[$r])]=($gb==""&&$o[$jb[$r]]["null"]?"NULL":q(str_replace('""','"',preg_replace('~^"|"$~','',$gb))));$L[]=$O;}}$I=(!$L||$l->insertUpdate($a,$L,$sf));if($I)$l->commit();queries_redirect(remove_from_uri("page"),lang(array('%d row has been imported.','%d rows have been imported.'),$xa),$I);$l->rollback();}}}$Hg=$b->tableName($R);if(is_ajax()){page_headers();ob_start();}else
page_header('Select'.": $Hg",$m);$O=null;if(isset($Vf["insert"])||!support("table")){$O="";foreach((array)$_GET["where"]as$X){if(count($Kc[$X["col"]])==1&&($X["op"]=="="||(!$X["op"]&&!preg_match('~[_%]~',$X["val"]))))$O.="&set".urlencode("[".bracket_escape($X["col"])."]")."=".urlencode($X["val"]);}}$b->selectLinks($R,$O);if(!$f&&support("table"))echo"<p class='error'>".'Unable to select the table'.($o?".":": ".error())."\n";else{echo"<form action='' id='form'>\n","<div style='display: none;'>";hidden_fields_get();echo(DB!=""?'<input type="hidden" name="db" value="'.h(DB).'">'.(isset($_GET["ns"])?'<input type="hidden" name="ns" value="'.h($_GET["ns"]).'">':""):"");echo'<input type="hidden" name="select" value="'.h($a).'">',"</div>\n";$b->selectColumnsPrint($M,$f);$b->selectSearchPrint($Z,$f,$v);$b->selectOrderPrint($Me,$f,$v);$b->selectLimitPrint($z);$b->selectLengthPrint($Vg);$b->selectActionPrint($v);echo"</form>\n";$E=$_GET["page"];if($E=="last"){$Nc=$g->result(count_rows($a,$Z,$ud,$Uc));$E=floor(max(0,$Nc-1)/$z);}$hg=$M;if(!$hg){$hg[]="*";if($ye)$hg[]=$ye;}$ub=convert_fields($f,$o,$M);if($ub)$hg[]=substr($ub,2);$I=$l->select($a,$hg,$Z,$Uc,$Me,$z,$E,true);if(!$I)echo"<p class='error'>".error()."\n";else{if($w=="mssql"&&$E)$I->seek($z*$E);$fc=array();echo"<form action='' method='post' enctype='multipart/form-data'>\n";$L=array();while($K=$I->fetch_assoc()){if($E&&$w=="oracle")unset($K["RNUM"]);$L[]=$K;}if($_GET["page"]!="last"&&+$z&&$Uc&&$ud&&$w=="sql")$Nc=$g->result(" SELECT FOUND_ROWS()");if(!$L)echo"<p class='message'>".'No rows.'."\n";else{$Na=$b->backwardKeys($a,$Hg);echo"<table id='table' cellspacing='0' class='nowrap checkable' onclick='tableClick(event);' ondblclick='tableClick(event, true);' onkeydown='return editingKeydown(event);'>\n","<thead><tr>".(!$Uc&&$M?"":"<td><input type='checkbox' id='all-page' onclick='formCheck(this, /check/);'> <a href='".h($_GET["modify"]?remove_from_uri("modify"):$_SERVER["REQUEST_URI"]."&modify=1")."'>".'Modify'."</a>");$qe=array();$Rc=array();reset($M);$Ff=1;foreach($L[0]as$x=>$X){if($x!=$ye){$X=$_GET["columns"][key($M)];$n=$o[$M?($X?$X["col"]:current($M)):$x];$C=($n?$b->fieldName($n,$Ff):($X["fun"]?"*":$x));if($C!=""){$Ff++;$qe[$x]=$C;$e=idf_escape($x);$fd=remove_from_uri('(order|desc)[^=]*|page').'&order%5B0%5D='.urlencode($x);$Kb="&desc%5B0%5D=1";echo'<th onmouseover="columnMouse(this);" onmouseout="columnMouse(this, \' hidden\');">','<a href="'.h($fd.($Me[0]==$e||$Me[0]==$x||(!$Me&&$ud&&$Uc[0]==$e)?$Kb:'')).'">';echo
apply_sql_function($X["fun"],$C)."</a>";echo"<span class='column hidden'>","<a href='".h($fd.$Kb)."' title='".'descending'."' class='text'> â†“</a>";if(!$X["fun"])echo'<a href="#fieldset-search" onclick="selectSearch(\''.h(js_escape($x)).'\'); return false;" title="'.'Search'.'" class="text jsonly"> =</a>';echo"</span>";}$Rc[$x]=$X["fun"];next($M);}}$Od=array();if($_GET["modify"]){foreach($L
as$K){foreach($K
as$x=>$X)$Od[$x]=max($Od[$x],min(40,strlen(utf8_decode($X))));}}echo($Na?"<th>".'Relations':"")."</thead>\n";if(is_ajax()){if($z%2==1&&$E%2==1)odd();ob_end_clean();}foreach($b->rowDescriptions($L,$Kc)as$pe=>$K){$uh=unique_array($L[$pe],$v);if(!$uh){$uh=array();foreach($L[$pe]as$x=>$X){if(!preg_match('~^(COUNT\\((\\*|(DISTINCT )?`(?:[^`]|``)+`)\\)|(AVG|GROUP_CONCAT|MAX|MIN|SUM)\\(`(?:[^`]|``)+`\\))$~',$x))$uh[$x]=$X;}}$vh="";foreach($uh
as$x=>$X){if(($w=="sql"||$w=="pgsql")&&strlen($X)>64){$x="MD5(".(strpos($x,'(')?$x:idf_escape($x)).")";$X=md5($X);}$vh.="&".($X!==null?urlencode("where[".bracket_escape($x)."]")."=".urlencode($X):"null%5B%5D=".urlencode($x));}echo"<tr".odd().">".(!$Uc&&$M?"":"<td>".checkbox("check[]",substr($vh,1),in_array(substr($vh,1),(array)$_POST["check"]),"","this.form['all'].checked = false; formUncheck('all-page');").($ud||information_schema(DB)?"":" <a href='".h(ME."edit=".urlencode($a).$vh)."'>".'edit'."</a>"));foreach($K
as$x=>$X){if(isset($qe[$x])){$n=$o[$x];if($X!=""&&(!isset($fc[$x])||$fc[$x]!=""))$fc[$x]=(is_mail($X)?$qe[$x]:"");$_="";if(preg_match('~blob|bytea|raw|file~',$n["type"])&&$X!="")$_=ME.'download='.urlencode($a).'&field='.urlencode($x).$vh;if(!$_&&$X!==null){foreach((array)$Kc[$x]as$p){if(count($Kc[$x])==1||end($p["source"])==$x){$_="";foreach($p["source"]as$r=>$sg)$_.=where_link($r,$p["target"][$r],$L[$pe][$sg]);$_=($p["db"]!=""?preg_replace('~([?&]db=)[^&]+~','\\1'.urlencode($p["db"]),ME):ME).'select='.urlencode($p["table"]).$_;if(count($p["source"])==1)break;}}}if($x=="COUNT(*)"){$_=ME."select=".urlencode($a);$r=0;foreach((array)$_GET["where"]as$W){if(!array_key_exists($W["col"],$uh))$_.=where_link($r++,$W["col"],$W["val"],$W["op"]);}foreach($uh
as$_d=>$W)$_.=where_link($r++,$_d,$W);}$X=select_value($X,$_,$n,$Vg);$s=h("val[$vh][".bracket_escape($x)."]");$Y=$_POST["val"][$vh][bracket_escape($x)];$bc=!is_array($K[$x])&&is_utf8($X)&&$L[$pe][$x]==$K[$x]&&!$Rc[$x];$Ug=preg_match('~text|lob~',$n["type"]);if(($_GET["modify"]&&$bc)||$Y!==null){$Xc=h($Y!==null?$Y:$K[$x]);echo"<td>".($Ug?"<textarea name='$s' cols='30' rows='".(substr_count($K[$x],"\n")+1)."'>$Xc</textarea>":"<input name='$s' value='$Xc' size='$Od[$x]'>");}else{$Td=strpos($X,"<i>...</i>");echo"<td id='$s' onclick=\"selectClick(this, event, ".($Td?2:($Ug?1:0)).($bc?"":", '".h('Use edit link to modify this value.')."'").");\">$X";}}}if($Na)echo"<td>";$b->backwardKeysPrint($Na,$L[$pe]);echo"</tr>\n";}if(is_ajax())exit;echo"</table>\n";}if(($L||$E)&&!is_ajax()){$qc=true;if($_GET["page"]!="last"){if(!+$z)$Nc=count($L);elseif($w!="sql"||!$ud){$Nc=($ud?false:found_rows($R,$Z));if($Nc<max(1e4,2*($E+1)*$z))$Nc=reset(slow_query(count_rows($a,$Z,$ud,$Uc)));else$qc=false;}}if(+$z&&($Nc===false||$Nc>$z||$E)){echo"<p class='pages'>";$Zd=($Nc===false?$E+(count($L)>=$z?2:1):floor(($Nc-1)/$z));if($w!="simpledb"){echo'<a href="'.h(remove_from_uri("page"))."\" onclick=\"pageClick(this.href, +prompt('".'Page'."', '".($E+1)."'), event); return false;\">".'Page'."</a>:",pagination(0,$E).($E>5?" ...":"");for($r=max(1,$E-4);$r<min($Zd,$E+5);$r++)echo
pagination($r,$E);if($Zd>0){echo($E+5<$Zd?" ...":""),($qc&&$Nc!==false?pagination($Zd,$E):" <a href='".h(remove_from_uri("page")."&page=last")."' title='~$Zd'>".'last'."</a>");}echo(($Nc===false?count($L)+1:$Nc-$E*$z)>$z?' <a href="'.h(remove_from_uri("page")."&page=".($E+1)).'" onclick="return !selectLoadMore(this, '.(+$z).', \''.'Loading'.'...\');">'.'Load more data'.'</a>':'');}else{echo'Page'.":",pagination(0,$E).($E>1?" ...":""),($E?pagination($E,$E):""),($Zd>$E?pagination($E+1,$E).($Zd>$E+1?" ...":""):"");}}echo"<p class='count'>\n",($Nc!==false?"(".($qc?"":"~ ").lang(array('%d row','%d rows'),$Nc).") ":"");$Qb=($qc?"":"~ ").$Nc;echo
checkbox("all",1,0,'whole result',"var checked = formChecked(this, /check/); selectCount('selected', this.checked ? '$Qb' : checked); selectCount('selected2', this.checked || !checked ? '$Qb' : checked);")."\n";if($b->selectCommandPrint()){echo'<fieldset',($_GET["modify"]?'':' class="jsonly"'),'><legend>Modify</legend><div>
<input type="submit" value="Save"',($_GET["modify"]?'':' title="'.'Ctrl+click on a value to modify it.'.'"'),'>
</div></fieldset>
<fieldset><legend>Selected <span id="selected"></span></legend><div>
<input type="submit" name="edit" value="Edit">
<input type="submit" name="clone" value="Clone">
<input type="submit" name="delete" value="Delete"',confirm(),'>
</div></fieldset>
';}$Lc=$b->dumpFormat();foreach((array)$_GET["columns"]as$e){if($e["fun"]){unset($Lc['sql']);break;}}if($Lc){print_fieldset("export",'Export'." <span id='selected2'></span>");$We=$b->dumpOutput();echo($We?html_select("output",$We,$wa["output"])." ":""),html_select("format",$Lc,$wa["format"])," <input type='submit' name='export' value='".'Export'."'>\n","</div></fieldset>\n";}echo(!$Uc&&$M?"":"<script type='text/javascript'>tableCheck();</script>\n");}if($b->selectImportPrint()){print_fieldset("import",'Import',!$L);echo"<input type='file' name='csv_file'> ",html_select("separator",array("csv"=>"CSV,","csv;"=>"CSV;","tsv"=>"TSV"),$wa["format"],1);echo" <input type='submit' name='import' value='".'Import'."'>","</div></fieldset>\n";}$b->selectEmailPrint(array_filter($fc,'strlen'),$f);echo"<p><input type='hidden' name='token' value='$T'></p>\n","</form>\n";}}if(is_ajax()){ob_end_clean();exit;}}elseif(isset($_GET["variables"])){$xg=isset($_GET["status"]);page_header($xg?'Status':'Variables');$Ih=($xg?show_status():show_variables());if(!$Ih)echo"<p class='message'>".'No rows.'."\n";else{echo"<table cellspacing='0'>\n";foreach($Ih
as$x=>$X){echo"<tr>","<th><code class='jush-".$w.($xg?"status":"set")."'>".h($x)."</code>","<td>".nbsp($X);}echo"</table>\n";}}elseif(isset($_GET["script"])){header("Content-Type: text/javascript; charset=utf-8");if($_GET["script"]=="db"){$Eg=array("Data_length"=>0,"Index_length"=>0,"Data_free"=>0);foreach(table_status()as$C=>$R){$s=js_escape($C);json_row("Comment-$s",nbsp($R["Comment"]));if(!is_view($R)){foreach(array("Engine","Collation")as$x)json_row("$x-$s",nbsp($R[$x]));foreach($Eg+array("Auto_increment"=>0,"Rows"=>0)as$x=>$X){if($R[$x]!=""){$X=number_format($R[$x],0,'.',',');json_row("$x-$s",($x=="Rows"&&$X&&$R["Engine"]==($ug=="pgsql"?"table":"InnoDB")?"~ $X":$X));if(isset($Eg[$x]))$Eg[$x]+=($R["Engine"]!="InnoDB"||$x!="Data_free"?$R[$x]:0);}elseif(array_key_exists($x,$R))json_row("$x-$s");}}}foreach($Eg
as$x=>$X)json_row("sum-$x",number_format($X,0,'.',','));json_row("");}elseif($_GET["script"]=="kill")$g->query("KILL ".(+$_POST["kill"]));else{foreach(count_tables($b->databases())as$k=>$X)json_row("tables-".js_escape($k),$X);json_row("");}exit;}else{$Ng=array_merge((array)$_POST["tables"],(array)$_POST["views"]);if($Ng&&!$m&&!$_POST["search"]){$I=true;$ee="";if($w=="sql"&&count($_POST["tables"])>1&&($_POST["drop"]||$_POST["truncate"]||$_POST["copy"]))queries("SET foreign_key_checks = 0");if($_POST["truncate"]){if($_POST["tables"])$I=truncate_tables($_POST["tables"]);$ee='Tables have been truncated.';}elseif($_POST["move"]){$I=move_tables((array)$_POST["tables"],(array)$_POST["views"],$_POST["target"]);$ee='Tables have been moved.';}elseif($_POST["copy"]){$I=copy_tables((array)$_POST["tables"],(array)$_POST["views"],$_POST["target"]);$ee='Tables have been copied.';}elseif($_POST["drop"]){if($_POST["views"])$I=drop_views($_POST["views"]);if($I&&$_POST["tables"])$I=drop_tables($_POST["tables"]);$ee='Tables have been dropped.';}elseif($w!="sql"){$I=($w=="sqlite"?queries("VACUUM"):apply_queries("VACUUM".($_POST["optimize"]?"":" ANALYZE"),$_POST["tables"]));$ee='Tables have been optimized.';}elseif(!$_POST["tables"])$ee='No tables.';elseif($I=queries(($_POST["optimize"]?"OPTIMIZE":($_POST["check"]?"CHECK":($_POST["repair"]?"REPAIR":"ANALYZE")))." TABLE ".implode(", ",array_map('idf_escape',$_POST["tables"])))){while($K=$I->fetch_assoc())$ee.="<b>".h($K["Table"])."</b>: ".h($K["Msg_text"])."<br>";}queries_redirect(substr(ME,0,-1),$ee,$I);}page_header(($_GET["ns"]==""?'Database'.": ".h(DB):'Schema'.": ".h($_GET["ns"])),$m,true);if($b->homepage()){if($_GET["ns"]!==""){echo"<h3 id='tables-views'>".'Tables and views'."</h3>\n";$Mg=tables_list();if(!$Mg)echo"<p class='message'>".'No tables.'."\n";else{echo"<form action='' method='post'>\n";if(support("table")){echo"<fieldset><legend>".'Search data in tables'." <span id='selected2'></span></legend><div>","<input type='search' name='query' value='".h($_POST["query"])."'> <input type='submit' name='search' value='".'Search'."'>\n","</div></fieldset>\n";if($_POST["search"]&&$_POST["query"]!="")search_tables();}echo"<table cellspacing='0' class='nowrap checkable' onclick='tableClick(event);' ondblclick='tableClick(event, true);'>\n",'<thead><tr class="wrap"><td><input id="check-all" type="checkbox" onclick="formCheck(this, /^(tables|views)\[/);">','<th>'.'Table','<td>'.'Engine','<td>'.'Collation','<td>'.'Data Length','<td>'.'Index Length','<td>'.'Data Free','<td>'.'Auto Increment','<td>'.'Rows',(support("comment")?'<td>'.'Comment':''),"</thead>\n";$S=0;foreach($Mg
as$C=>$U){$Lh=($U!==null&&!preg_match('~table~i',$U));echo'<tr'.odd().'><td>'.checkbox(($Lh?"views[]":"tables[]"),$C,in_array($C,$Ng,true),"","formUncheck('check-all');"),'<th>'.(support("table")||support("indexes")?'<a href="'.h(ME).'table='.urlencode($C).'" title="'.'Show structure'.'">'.h($C).'</a>':h($C));if($Lh){echo'<td colspan="6"><a href="'.h(ME)."view=".urlencode($C).'" title="'.'Alter view'.'">'.'View'.'</a>','<td align="right"><a href="'.h(ME)."select=".urlencode($C).'" title="'.'Select data'.'">?</a>';}else{foreach(array("Engine"=>array(),"Collation"=>array(),"Data_length"=>array("create",'Alter table'),"Index_length"=>array("indexes",'Alter indexes'),"Data_free"=>array("edit",'New item'),"Auto_increment"=>array("auto_increment=1&create",'Alter table'),"Rows"=>array("select",'Select data'),)as$x=>$_){$s=" id='$x-".h($C)."'";echo($_?"<td align='right'>".(support("table")||$x=="Rows"||(support("indexes")&&$x!="Data_length")?"<a href='".h(ME."$_[0]=").urlencode($C)."'$s title='$_[1]'>?</a>":"<span$s>?</span>"):"<td id='$x-".h($C)."'>&nbsp;");}$S++;}echo(support("comment")?"<td id='Comment-".h($C)."'>&nbsp;":"");}echo"<tr><td>&nbsp;<th>".sprintf('%d in total',count($Mg)),"<td>".nbsp($w=="sql"?$g->result("SELECT @@storage_engine"):""),"<td>".nbsp(db_collation(DB,collations()));foreach(array("Data_length","Index_length","Data_free")as$x)echo"<td align='right' id='sum-$x'>&nbsp;";echo"</table>\n";if(!information_schema(DB)){$Fh="<input type='submit' value='".'Vacuum'."'".on_help("'VACUUM'")."> ";$Ie="<input type='submit' name='optimize' value='".'Optimize'."'".on_help($w=="sql"?"'OPTIMIZE TABLE'":"'VACUUM OPTIMIZE'")."> ";echo"<fieldset><legend>".'Selected'." <span id='selected'></span></legend><div>".($w=="sqlite"?$Fh:($w=="pgsql"?$Fh.$Ie:($w=="sql"?"<input type='submit' value='".'Analyze'."'".on_help("'ANALYZE TABLE'")."> ".$Ie."<input type='submit' name='check' value='".'Check'."'".on_help("'CHECK TABLE'")."> "."<input type='submit' name='repair' value='".'Repair'."'".on_help("'REPAIR TABLE'")."> ":"")))."<input type='submit' name='truncate' value='".'Truncate'."'".confirm().on_help($w=="sqlite"?"'DELETE'":"'TRUNCATE".($w=="pgsql"?"'":" TABLE'"))."> "."<input type='submit' name='drop' value='".'Drop'."'".confirm().on_help("'DROP TABLE'").">\n";$j=(support("scheme")?$b->schemas():$b->databases());if(count($j)!=1&&$w!="sqlite"){$k=(isset($_POST["target"])?$_POST["target"]:(support("scheme")?$_GET["ns"]:DB));echo"<p>".'Move to other database'.": ",($j?html_select("target",$j,$k):'<input name="target" value="'.h($k).'" autocapitalize="off">')," <input type='submit' name='move' value='".'Move'."'>",(support("copy")?" <input type='submit' name='copy' value='".'Copy'."'>":""),"\n";}echo"<input type='hidden' name='all' value='' onclick=\"selectCount('selected', formChecked(this, /^(tables|views)\[/));".(support("table")?" selectCount('selected2', formChecked(this, /^tables\[/) || $S);":"")."\">\n";echo"<input type='hidden' name='token' value='$T'>\n","</div></fieldset>\n";}echo"</form>\n","<script type='text/javascript'>tableCheck();</script>\n";}echo'<p class="links"><a href="'.h(ME).'create=">'.'Create table'."</a>\n",(support("view")?'<a href="'.h(ME).'view=">'.'Create view'."</a>\n":"");if(support("routine")){echo"<h3 id='routines'>".'Routines'."</h3>\n";$Zf=routines();if($Zf){echo"<table cellspacing='0'>\n",'<thead><tr><th>'.'Name'.'<td>'.'Type'.'<td>'.'Return type'."<td>&nbsp;</thead>\n";odd('');foreach($Zf
as$K){echo'<tr'.odd().'>','<th><a href="'.h(ME).($K["ROUTINE_TYPE"]!="PROCEDURE"?'callf=':'call=').urlencode($K["ROUTINE_NAME"]).'">'.h($K["ROUTINE_NAME"]).'</a>','<td>'.h($K["ROUTINE_TYPE"]),'<td>'.h($K["DTD_IDENTIFIER"]),'<td><a href="'.h(ME).($K["ROUTINE_TYPE"]!="PROCEDURE"?'function=':'procedure=').urlencode($K["ROUTINE_NAME"]).'">'.'Alter'."</a>";}echo"</table>\n";}echo'<p class="links">'.(support("procedure")?'<a href="'.h(ME).'procedure=">'.'Create procedure'.'</a>':'').'<a href="'.h(ME).'function=">'.'Create function'."</a>\n";}if(support("sequence")){echo"<h3 id='sequences'>".'Sequences'."</h3>\n";$lg=get_vals("SELECT sequence_name FROM information_schema.sequences WHERE sequence_schema = current_schema()");if($lg){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Name'."</thead>\n";odd('');foreach($lg
as$X)echo"<tr".odd()."><th><a href='".h(ME)."sequence=".urlencode($X)."'>".h($X)."</a>\n";echo"</table>\n";}echo"<p class='links'><a href='".h(ME)."sequence='>".'Create sequence'."</a>\n";}if(support("type")){echo"<h3 id='user-types'>".'User types'."</h3>\n";$Dh=types();if($Dh){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Name'."</thead>\n";odd('');foreach($Dh
as$X)echo"<tr".odd()."><th><a href='".h(ME)."type=".urlencode($X)."'>".h($X)."</a>\n";echo"</table>\n";}echo"<p class='links'><a href='".h(ME)."type='>".'Create type'."</a>\n";}if(support("event")){echo"<h3 id='events'>".'Events'."</h3>\n";$L=get_rows("SHOW EVENTS");if($L){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Name'."<td>".'Schedule'."<td>".'Start'."<td>".'End'."<td></thead>\n";foreach($L
as$K){echo"<tr>","<th>".h($K["Name"]),"<td>".($K["Execute at"]?'At given time'."<td>".$K["Execute at"]:'Every'." ".$K["Interval value"]." ".$K["Interval field"]."<td>$K[Starts]"),"<td>$K[Ends]",'<td><a href="'.h(ME).'event='.urlencode($K["Name"]).'">'.'Alter'.'</a>';}echo"</table>\n";$oc=$g->result("SELECT @@event_scheduler");if($oc&&$oc!="ON")echo"<p class='error'><code class='jush-sqlset'>event_scheduler</code>: ".h($oc)."\n";}echo'<p class="links"><a href="'.h(ME).'event=">'.'Create event'."</a>\n";}if($Mg)echo"<script type='text/javascript'>ajaxSetHtml('".js_escape(ME)."script=db');</script>\n";}}}page_footer();