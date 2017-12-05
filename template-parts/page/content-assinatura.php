<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<?php twentyseventeen_edit_link( get_the_ID() ); ?>
	</header><!-- .entry-header -->
	<div class="entry-content">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ),
				'after'  => '</div>',
			) );
		?>
		
		<p><input type="text" placeholder="Nome" name="nome"></p>
		<p><input type="text" placeholder="Cargo" name="cargo"></p>
		<p><input type="text" placeholder="Telefone" name="telefone"></p>
		<p><input type="url" placeholder="URL da foto" name="telefone"></p>
		<p><input type="url" placeholder="URL do Facebook" name="telefone"></p>
		<p><input type="url" placeholder="URL do Instagram" name="telefone"></p>
		<p><input type="url" placeholder="URL do LinkedIn" name="telefone"></p>
		
		
<table style="WIDTH:525px; FONT-SIZE:10pt; FONT-FAMILY:ARIAL" class="ng-scope" cellspacing="0" cellpadding="0">
    <tbody>
        <tr>
            <td style="FONT-SIZE:10pt; FONT-FAMILY:Arial; WIDTH:199px; PADDING-RIGHT:10px; vertical-align:top; text-align:center;" rowspan="3" valign="top" align="center">
                <!-- ngIf: showField('logoURL') && showField('logo') -->
                <a ng-if="showField('logoURL') &amp;&amp; showField('logo')" href="https://www.codetwo.com/" target="_blank" class="ng-scope"> <img ng-src="https://signature-generator.cdn.codetwo.com/images/greenzorro/logo.png" alt="Logo" style="width:169px; height:auto; border:0;" src="https://signature-generator.cdn.codetwo.com/images/greenzorro/logo.png" width="169" border="0"> </a>
                <!-- end ngIf: showField('logoURL') && showField('logo') -->
                <!-- ngIf: !showField('logoURL') && showField('logo') -->
            </td>
            <td style="FONT-SIZE:18pt; FONT-FAMILY:Arial; WIDTH:326px; PADDING-BOTTOM:5px; PADDING-LEFT:10px; vertical-align:top;" valign="top">
                <strong><span style="FONT-SIZE:18pt; FONT-FAMILY:Arial; color:#006c2e" class="ng-binding nome">John Doe</span></strong>
                <br>
                <!-- ngIf: showField('title') --><span ng-if="showField('title')" style="FONT-FAMILY:Arial; FONT-SIZE:10pt; color:#2a2a2a;" class="ng-binding ng-scope cargo">Sales &amp; Marketing Director</span>
                <!-- end ngIf: showField('title') -->
                <!-- ngIf: isEveryFieldEntered('title, company') --><span ng-if="isEveryFieldEntered('title, company')" style="FONT-FAMILY:Arial; FONT-SIZE:10pt; color:#2a2a2a;" class="ng-scope"> • </span>
                <!-- end ngIf: isEveryFieldEntered('title, company') -->
                <!-- ngIf: showField('company') --><span ng-if="showField('company')" style="FONT-FAMILY:Arial; FONT-SIZE:10pt; color:#2a2a2a;" class="ng-binding ng-scope">CodeTwo</span>
                <!-- end ngIf: showField('company') -->
            </td>
        </tr>
        <tr>
            <td style="FONT-SIZE:10pt; FONT-FAMILY:Arial; PADDING-BOTTOM:5px; PADDING-TOP:5px; PADDING-LEFT:10px; vertical-align:top;" valign="top">
                <!-- ngIf: showField('mobile') --><span ng-if="showField('mobile')" style="FONT-SIZE:10pt; FONT-FAMILY:Arial;color:#8c8c8c;" class="ng-binding ng-scope">whatsapp: + 48 75 64 61 001
   <!-- ngIf: showField('phone') --><span ng-if="showField('phone')" style="FONT-SIZE:10pt; FONT-FAMILY:Arial;color:#8c8c8c;" class="ng-scope">• </span>
                <!-- end ngIf: showField('phone') -->
                </span>
                <!-- end ngIf: showField('mobile') -->
                <!-- ngIf: showField('phone') --><span ng-if="showField('phone')" style="FONT-SIZE:10pt; FONT-FAMILY:Arial;color:#8c8c8c;" class="ng-binding ng-scope"> phone: + 48 75 64 61 001</span>
                <!-- end ngIf: showField('phone') -->
                <br>
                <!-- ngIf: showField('email') --><span ng-if="showField('email')" style="FONT-SIZE:10pt; FONT-FAMILY:Arial;color:#8c8c8c;" class="ng-binding ng-scope">email: john.doe@codetwo.com<br></span>
                <!-- end ngIf: showField('email') -->
                <!-- ngIf: showField('address1') --><span ng-if="showField('address1')" style="FONT-SIZE:10pt; FONT-FAMILY:Arial;color:#8c8c8c;" class="ng-binding ng-scope">16 Freedom St, Deer Hill<br></span>
                <!-- end ngIf: showField('address1') -->
                <!-- ngIf: showField('address2') --><span ng-if="showField('address2')" style="FONT-SIZE:10pt; FONT-FAMILY:Arial;color:#8c8c8c;" class="ng-binding ng-scope">58-500, Poland</span>
                <!-- end ngIf: showField('address2') -->
            </td>
        </tr>
        <tr>
            <td style="FONT-SIZE:10pt; FONT-FAMILY:Arial; PADDING-BOTTOM:10px; PADDING-TOP:5px; PADDING-LEFT:10px; vertical-align:middle;" valign="middle">
                <!-- ngIf: showField('website') --><span ng-if="showField('website')" class="ng-scope"><strong><a href="http://www.codetwo.com" target="_blank" style="FONT-SIZE:10pt; FONT-FAMILY:Arial; color:#2a2a2a;" class="ng-binding">www.codetwo.com</a> </strong></span>
                <!-- end ngIf: showField('website') -->
            </td>
        </tr>
        <tr>
            <td style="FONT-SIZE:10pt; FONT-FAMILY:Arial; PADDING-BOTTOM:10px; PADDING-RIGHT:10px; vertical-align:middle; text-align:center;" valign="middle" align="center">
                <!-- ngIf: showField('facebookURL') --><span ng-if="showField('facebookURL')" class="ng-scope"><a href="https://www.facebook.com/CodeTwo" target="_blank"> <img ng-src="https://signature-generator.cdn.codetwo.com/images/greenzorro/fb.png" alt="Facebook icon" style="border:0; height:23px; width:23px" src="https://signature-generator.cdn.codetwo.com/images/greenzorro/fb.png" width="23" border="0"></a> </span>
                <!-- end ngIf: showField('facebookURL') -->
                <!-- ngIf: showField('linkedinURL') --><span ng-if="showField('linkedinURL')" class="ng-scope"><a href="https://www.linkedin.com/company/codetwo" target="_blank"><img ng-src="https://signature-generator.cdn.codetwo.com/images/greenzorro/ln.png" alt="LinkedIn icon" style="border:0; height:23px; width:23px" src="https://signature-generator.cdn.codetwo.com/images/greenzorro/ln.png" width="23" border="0"></a> </span>
                <!-- end ngIf: showField('linkedinURL') -->
                <!-- ngIf: showField('twitterURL') --><span ng-if="showField('twitterURL')" class="ng-scope"><a href="https://twitter.com/CodeTwoSoftware" target="_blank"><img ng-src="https://signature-generator.cdn.codetwo.com/images/greenzorro/tt.png" alt="Twitter icon" style="border:0; height:23px; width:23px" src="https://signature-generator.cdn.codetwo.com/images/greenzorro/tt.png" width="23" border="0"></a> </span>
                <!-- end ngIf: showField('twitterURL') -->
                <!-- ngIf: showField('gplusURL') --><span ng-if="showField('gplusURL')" class="ng-scope"><a href="https://plus.google.com/+CodeTwoSoftware" target="_blank"><img ng-src="https://signature-generator.cdn.codetwo.com/images/greenzorro/gp.png" alt="Google Plus icon" style="border:0; height:23px; width:23px" src="https://signature-generator.cdn.codetwo.com/images/greenzorro/gp.png" width="23" border="0"></a> </span>
                <!-- end ngIf: showField('gplusURL') -->
                <!-- ngIf: showField('youtubeURL') --><span ng-if="showField('youtubeURL')" class="ng-scope"><a href="https://www.youtube.com/user/CodeTwoChannel" target="_blank"><img ng-src="https://signature-generator.cdn.codetwo.com/images/greenzorro/yt.png" alt="Youtbue icon" style="border:0; height:23px; width:23px" src="https://signature-generator.cdn.codetwo.com/images/greenzorro/yt.png" width="23" border="0"></a> </span>
                <!-- end ngIf: showField('youtubeURL') -->
                <!-- ngIf: showField('instagramURL') -->
            </td>
            <td style="FONT-SIZE:10pt; FONT-FAMILY:Arial; PADDING-BOTTOM:10px; PADDING-LEFT:10px; vertical-align:top; text-align:left;" valign="top" align="left">

                <!-- ngIf: showField('bannerURL') -->
                <a ng-if="showField('bannerURL')" href="https://www.codetwo.com/exchange-rules-family/" target="_blank" class="ng-scope">
                    <!-- ngIf: showField('banner') --><img ng-if="showField('banner')" ng-src="https://signature-generator.cdn.codetwo.com/images/greenzorro/banner.png" alt="Banner" style="width:326px; height:auto; border:0;" class="ng-scope" src="https://signature-generator.cdn.codetwo.com/images/greenzorro/banner.png" width="326" border="0">
                    <!-- end ngIf: showField('banner') -->
                </a>
                <!-- end ngIf: showField('bannerURL') -->

                <!-- ngIf: !showField('bannerURL') && showField('banner') -->


            </td>
        </tr>
        <!-- ngIf: showField('disclaimer') -->
        <tr ng-if="showField('disclaimer')" class="ng-scope">
            <td style="FONT-SIZE:10pt; BORDER-TOP:#79ca06 1px solid; FONT-FAMILY:Arial; PADDING-TOP:10px; color:#8c8c8c; text-align:justify; vertical-align:top;" colspan="2" class="ng-binding" valign="top" align="justify">
                Este e-mail e quaisquer arquivos transmitidos com ele são confidenciais e destinados exclusivamente ao uso do indivíduo ou entidade a quem são endereçados. Se você recebeu este e-mail por engano, avise o gerente do sistema. Esta mensagem contém informações confidenciais e destina-se apenas ao indivíduo designado. Se você não é o destinatário indicado, não deve divulgar, distribuir ou copiar este e-mail. Por favor avise o remetente imediatamente se você recebeu este e-mail por engano e exclua-o do seu sistema. Se você não é o destinatário pretendido, esteja ciente que divulgar, copiar, distribuir ou tomar qualquer ação com base no conteúdo desta informação é estritamente proibido.mi
            </td>
        </tr>
        <!-- end ngIf: showField('disclaimer') -->
    </tbody>
</table>
	</div><!-- .entry-content -->
</article><!-- #post-## -->