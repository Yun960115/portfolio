<!DOCTYPE HTML>
<!--
	Strata by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Strata by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">

		<!-- Header -->
			<header id="header">
				<div class="inner">
					<a href="#" class="image avatar"><img src="images/yungyeong.jpg" alt="" /></a>
					<h1><strong>WEB DEVELOPER PORTFOLIO</strong><br />
					Lee Yun Gyeong 이윤경<br /></h1>
				</div>
			</header>

		<!-- Main -->
			<div id="main">

				<!-- One -->
					<section id="one">
						<header class="major">
							<h2>ABOUT ME<br /></h2>
							이윤경<br />
							96.01.15<br />
							010-2442-9194<br />
							yglove96@naver.com<br />
							동의과학대학교(정보통신과)<br />
							인터넷정보통신과 연계전공<br /><br />
							
							<h2>EDUCATION<br /></h2>
							2022-04-21 ~ 2022.09.30<br />
							핀테크 기반 e커머스 개발자B <br />
							(IT WILL 아이티윌 부산교육센터)<br /><br /><br />

							<h2>SKILLS<br /></h2>
							<ul>
								<li><strong>Back-End</strong></li>
								Java, JSP, Spring4, MyBatis
								<li><strong>Front-End</strong></li>
								HTML5, CSS3, JavaScript, JQuery, Ajax, JSON
								<li><strong>DBMS</strong></li>
								Oracle, MySQL
								<li><strong>Deployment</strong></li>
								AWS RDBS
								<li><strong>Server</strong></li>
								Apache Tomcat 8.5
								<li><strong>Tools</strong></li>
								Eclipse(STS), MySQL Workbench, Oracle SQL Developer
								<li><strong>Collaboration</strong></li>
								GitHub, Whimsical, Google Sheet, Google Docs

							</ul>
						</header>
						<ul class="actions">
							<li><a href="#two" class="button">더 알아보기</a></li>
						</ul>
					</section>

				<!-- Two -->
					<section id="two">
						<h1>Team Project</h1>
						<h2>핏티드</h2>
						<p> 팬데믹 후유증을 극복하려는 사람들로 운동하는 인구가 증가함에 따라 <br/>
							상품을 사고 팔 수 있는 '운동 용품 쇼핑몰 사이트' 를 개발하였습니다. <br/>
							<br/>
							사용자의 관점에서 쇼핑을 사고 파는 전체적인 흐름을 이해하고<br/>
							그에 따른 기능을 구현함으로써 다른 프로젝트 진행에도 도움이 될것입니다.<br/>
							기본적인 CRUD를 포함한 기능을 구현할 수 있는 요소가 다양하다고 생각하여 쇼핑몰을 선택하였습니다.<br/>
						</p>
						<div class="row">
							<article class="col-6 col-12-xsmall work-item">
								<a href="images/fulls/main.jpg" class="image fit thumb"><img src="images/thumbs/main.jpg" alt="" /></a>
								<h3>메인화면</h3>
								<p>1.내용 : 신상품 8개, 많이팔린상품 4개 <br/>
									2.구성 : Tab 으로 나누어 상품이 보여짐<br/>
									3.기능 : Table Join 처리로 Mash Up  (주문목록, 판매수량)</p>
							</article>
							<article class="col-6 col-12-xsmall work-item">
								<a href="images/fulls/newProduct.jpg" class="image fit thumb"><img src="images/thumbs/newProduct.jpg" alt="" /></a>
								<h3>신상품</h3>
								<a href="images/fulls/bsProduct.jpg" class="image fit thumb"><img src="images/thumbs/bsProduct.jpg" alt="" /></a>
								<h3>많이팔린상품</h3>
							</article>
							<article class="col-6 col-12-xsmall work-item">
								<a href="images/fulls/shop.jpg" class="image fit thumb"><img src="images/thumbs/shop.jpg" alt="" /></a>
								<h3>상품 메인 화면</h3>
								<p>1.내용 : 업체가 등록한 상품을 조회<br/>
									2.구성 : 전체검색,카테고리,정렬,페이징,전체 상품 개수,평균 별점<br/>
									2.기능 : Ajax, MyBatis 사용하여 검색<br/>
									각각 따로 쿼리짜서 Ajax한게 아니라 하나의 쿼리로 각각 컨포넌트를 받아서 하나의 Ajax를 호출</p>
							</article>
							<article class="col-6 col-12-xsmall work-item">
								<a href="images/fulls/details.jpg" class="image fit thumb"><img src="images/thumbs/details.jpg" alt="" /></a>
								<h3>상품 상세 화면</h3>
								<p>1.내용 : 등록된 상품에 대한 상세 내용<br/>
									2.구성 : 상품 리뷰 조회,등록,수정,삭제<br/>
									3.기능 : <br/>
									- Ajax 사용하여 리뷰 페이징 처리<br/>
									- 리뷰 등록,수정,삭제 시 Session 확인 및 <br/>
									자신이 등록한 리뷰건만 가능하도록 Validation 처리</p>
							</article>
							<article class="col-6 col-12-xsmall work-item">
								<a href="images/fulls/relatedProducts.jpg" class="image fit thumb"><img src="images/thumbs/relatedProducts.jpg" alt="" /></a>
								<h3>관련 상품</h3>
								<p>쿼리에서 랜덤으로 관련된 상품 4건만 보이게함<br/>
									ex) 상의이면 상의중에서 4개,<br/>
									　  프로틴이면 프로틴중에 4개를 랜덤으로 뿌려줌</p>
							</article>
							<article class="col-6 col-12-xsmall work-item">
								<a href="images/fulls/review.jpg" class="image fit thumb"><img src="images/thumbs/review.jpg" alt="" /></a>
								<h3>상품 리뷰</h3>
								<p>팝업창을 띄어 기능 구현</p>
							</article>
							<article class="col-6 col-12-xsmall work-item">
								<a href="images/fulls/reviewC.jpg" class="image fit thumb"><img src="images/thumbs/reviewC.JPG" alt="" /></a>
								<h3>상품 리뷰 등록</h3>
							</article>
							<article class="col-6 col-12-xsmall work-item">
								<a href="images/fulls/reviewU.jpg" class="image fit thumb"><img src="images/thumbs/reviewU.jpg" alt="" /></a>
								<h3>상품 리뷰 수정</h3>
							</article>
							<h2></h2>
						</div>
						<hr>
						<h2>담당 역할<br /></h2>
							<ul>
								<li>스토어 전담</li>
								<li>상품 정보, 관련 상품</li>
								<li>리뷰(별점), 분류별 검색</li>
							</ul>
						<h2>프로젝트 정보<br /></h2>
							<ul>
								<li><strong>제작 기간</strong></li>
								2022.08.03 ~ 2022.09.30
								<li><strong>주요 기능</strong></li>
								회원, 스토어, 주문, 커뮤니티, 포인트, 마이/업체/관리페이지로 구성 <br/>
								<a href="images/util.jpg">기능 정의서</a><br/>
								<li><strong>GitHub</strong></li>
								<a href="https://github.com/TEAMPROJECT-2/TP">https://github.com/TEAMPROJECT-2/TP</a> 
								<li><strong>URL</strong></li>
								<a href="http://itwillbs15.cafe24.com/main/main">핏티드</a>
								<li><strong>PPT</strong></li>
								<a href="https://github.com/TEAMPROJECT-2/TP/files/9681178/2._.PPT.pdf">핏티드 PPT</a>
								<li><strong>Frontend</strong></li>
								프레임워크 및 라이브러리 : Bootstrap5, jQuery, jQuery.ajax.json <br/>
								언어 : HTML, CSS, Javascript<br/>
								<li><strong>Backend</strong></li>
								프레임워크 및 라이브러리 : Spring, Mybatis, Spring-security <br/>
								<li><strong>Database</strong></li>
								MySQL
								<li><strong>Server</strong></li>
								Tomcat 8.5 <br/>
								<li><strong>Tools</strong></li>
								Eclipse, MySQL Workbench <br/>
								<li><strong>Version Control</strong></li>
								Git, Github <br/>
								<li><strong>API</strong></li>
								다음 우편번호API, 채널톡 API, 네아로 API, 카카오톡 로그인 API, 배송 조회 API <br/>
							</ul>
						<ul class="actions">
							<li><a href="#" class="button">Full Portfolio</a></li>
						</ul>
					</section>

				<!-- Three -->
				<!-- 
					<section id="three">
						<h2>Get In Touch</h2>
						<p>Accumsan pellentesque commodo blandit enim arcu non at amet id arcu magna. Accumsan orci faucibus id eu lorem semper nunc nisi lorem vulputate lorem neque lorem ipsum dolor.</p>
						<div class="row">
							<div class="col-8 col-12-small">
								<form method="post" action="#">
									<div class="row gtr-uniform gtr-50">
										<div class="col-6 col-12-xsmall"><input type="text" name="name" id="name" placeholder="Name" /></div>
										<div class="col-6 col-12-xsmall"><input type="email" name="email" id="email" placeholder="Email" /></div>
										<div class="col-12"><textarea name="message" id="message" placeholder="Message" rows="4"></textarea></div>
									</div>
								</form>
								<ul class="actions">
									<li><input type="submit" value="Send Message" /></li>
								</ul>
							</div>
							<div class="col-4 col-12-small">
								<ul class="labeled-icons">
									<li>
										<h3 class="icon solid fa-home"><span class="label">Address</span></h3>
										1234 Somewhere Rd.<br />
										Nashville, TN 00000<br />
										United States
									</li>
									<li>
										<h3 class="icon solid fa-mobile-alt"><span class="label">Phone</span></h3>
										000-000-0000
									</li>
									<li>
										<h3 class="icon solid fa-envelope"><span class="label">Email</span></h3>
										<a href="#">hello@untitled.tld</a>
									</li>
								</ul>
							</div>
						</div>
					</section>
				-->

				<!-- Four -->
				<!--
					<section id="four">
						<h2>Elements</h2>

						<section>
							<h4>Text</h4>
							<p>This is <b>bold</b> and this is <strong>strong</strong>. This is <i>italic</i> and this is <em>emphasized</em>.
							This is <sup>superscript</sup> text and this is <sub>subscript</sub> text.
							This is <u>underlined</u> and this is code: <code>for (;;) { ... }</code>. Finally, <a href="#">this is a link</a>.</p>
							<hr />
							<header>
								<h4>Heading with a Subtitle</h4>
								<p>Lorem ipsum dolor sit amet nullam id egestas urna aliquam</p>
							</header>
							<p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat eu sed ante lacinia sapien lorem accumsan varius montes viverra nibh in adipiscing blandit tempus accumsan.</p>
							<header>
								<h5>Heading with a Subtitle</h5>
								<p>Lorem ipsum dolor sit amet nullam id egestas urna aliquam</p>
							</header>
							<p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat eu sed ante lacinia sapien lorem accumsan varius montes viverra nibh in adipiscing blandit tempus accumsan.</p>
							<hr />
							<h2>Heading Level 2</h2>
							<h3>Heading Level 3</h3>
							<h4>Heading Level 4</h4>
							<h5>Heading Level 5</h5>
							<h6>Heading Level 6</h6>
							<hr />
							<h5>Blockquote</h5>
							<blockquote>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan faucibus. Vestibulum ante ipsum primis in faucibus lorem ipsum dolor sit amet nullam adipiscing eu felis.</blockquote>
							<h5>Preformatted</h5>
							<pre><code>i = 0;

while (!deck.isInOrder()) {
print 'Iteration ' + i;
deck.shuffle();
i++;
}

print 'It took ' + i + ' iterations to sort the deck.';</code></pre>
						</section>

						<section>
							<h4>Lists</h4>
							<div class="row">
								<div class="col-6 col-12-xsmall">
									<h5>Unordered</h5>
									<ul>
										<li>Dolor pulvinar etiam magna etiam.</li>
										<li>Sagittis adipiscing lorem eleifend.</li>
										<li>Felis enim feugiat dolore viverra.</li>
									</ul>
									<h5>Alternate</h5>
									<ul class="alt">
										<li>Dolor pulvinar etiam magna etiam.</li>
										<li>Sagittis adipiscing lorem eleifend.</li>
										<li>Felis enim feugiat dolore viverra.</li>
									</ul>
								</div>
								<div class="col-6 col-12-xsmall">
									<h5>Ordered</h5>
									<ol>
										<li>Dolor pulvinar etiam magna etiam.</li>
										<li>Etiam vel felis at lorem sed viverra.</li>
										<li>Felis enim feugiat dolore viverra.</li>
										<li>Dolor pulvinar etiam magna etiam.</li>
										<li>Etiam vel felis at lorem sed viverra.</li>
										<li>Felis enim feugiat dolore viverra.</li>
									</ol>
									<h5>Icons</h5>
									<ul class="icons">
										<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
										<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
										<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
										<li><a href="#" class="icon brands fa-github"><span class="label">Github</span></a></li>
										<li><a href="#" class="icon brands fa-dribbble"><span class="label">Dribbble</span></a></li>
										<li><a href="#" class="icon brands fa-tumblr"><span class="label">Tumblr</span></a></li>
									</ul>
								</div>
							</div>
							<h5>Actions</h5>
							<ul class="actions">
								<li><a href="#" class="button primary">Default</a></li>
								<li><a href="#" class="button">Default</a></li>
							</ul>
							<ul class="actions small">
								<li><a href="#" class="button primary small">Small</a></li>
								<li><a href="#" class="button small">Small</a></li>
							</ul>
							<div class="row">
								<div class="col-6 col-12-small">
									<ul class="actions stacked">
										<li><a href="#" class="button primary">Default</a></li>
										<li><a href="#" class="button">Default</a></li>
									</ul>
								</div>
								<div class="col-6 col-12-small">
									<ul class="actions stacked">
										<li><a href="#" class="button primary small">Small</a></li>
										<li><a href="#" class="button small">Small</a></li>
									</ul>
								</div>
								<div class="col-6 col-12-small">
									<ul class="actions stacked">
										<li><a href="#" class="button primary fit">Default</a></li>
										<li><a href="#" class="button fit">Default</a></li>
									</ul>
								</div>
								<div class="col-6 col-12-small">
									<ul class="actions stacked">
										<li><a href="#" class="button primary small fit">Small</a></li>
										<li><a href="#" class="button small fit">Small</a></li>
									</ul>
								</div>
							</div>
						</section>

						<section>
							<h4>Table</h4>
							<h5>Default</h5>
							<div class="table-wrapper">
								<table>
									<thead>
										<tr>
											<th>Name</th>
											<th>Description</th>
											<th>Price</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Item One</td>
											<td>Ante turpis integer aliquet porttitor.</td>
											<td>29.99</td>
										</tr>
										<tr>
											<td>Item Two</td>
											<td>Vis ac commodo adipiscing arcu aliquet.</td>
											<td>19.99</td>
										</tr>
										<tr>
											<td>Item Three</td>
											<td> Morbi faucibus arcu accumsan lorem.</td>
											<td>29.99</td>
										</tr>
										<tr>
											<td>Item Four</td>
											<td>Vitae integer tempus condimentum.</td>
											<td>19.99</td>
										</tr>
										<tr>
											<td>Item Five</td>
											<td>Ante turpis integer aliquet porttitor.</td>
											<td>29.99</td>
										</tr>
									</tbody>
									<tfoot>
										<tr>
											<td colspan="2"></td>
											<td>100.00</td>
										</tr>
									</tfoot>
								</table>
							</div>

							<h5>Alternate</h5>
							<div class="table-wrapper">
								<table class="alt">
									<thead>
										<tr>
											<th>Name</th>
											<th>Description</th>
											<th>Price</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Item One</td>
											<td>Ante turpis integer aliquet porttitor.</td>
											<td>29.99</td>
										</tr>
										<tr>
											<td>Item Two</td>
											<td>Vis ac commodo adipiscing arcu aliquet.</td>
											<td>19.99</td>
										</tr>
										<tr>
											<td>Item Three</td>
											<td> Morbi faucibus arcu accumsan lorem.</td>
											<td>29.99</td>
										</tr>
										<tr>
											<td>Item Four</td>
											<td>Vitae integer tempus condimentum.</td>
											<td>19.99</td>
										</tr>
										<tr>
											<td>Item Five</td>
											<td>Ante turpis integer aliquet porttitor.</td>
											<td>29.99</td>
										</tr>
									</tbody>
									<tfoot>
										<tr>
											<td colspan="2"></td>
											<td>100.00</td>
										</tr>
									</tfoot>
								</table>
							</div>
						</section>

						<section>
							<h4>Buttons</h4>
							<ul class="actions">
								<li><a href="#" class="button primary">Primary</a></li>
								<li><a href="#" class="button">Default</a></li>
							</ul>
							<ul class="actions">
								<li><a href="#" class="button large">Large</a></li>
								<li><a href="#" class="button">Default</a></li>
								<li><a href="#" class="button small">Small</a></li>
							</ul>
							<ul class="actions fit">
								<li><a href="#" class="button primary fit">Fit</a></li>
								<li><a href="#" class="button fit">Fit</a></li>
							</ul>
							<ul class="actions fit small">
								<li><a href="#" class="button primary fit small">Fit + Small</a></li>
								<li><a href="#" class="button fit small">Fit + Small</a></li>
							</ul>
							<ul class="actions">
								<li><a href="#" class="button primary icon solid fa-download">Icon</a></li>
								<li><a href="#" class="button icon solid fa-download">Icon</a></li>
							</ul>
							<ul class="actions">
								<li><span class="button primary disabled">Primary</span></li>
								<li><span class="button disabled">Default</span></li>
							</ul>
						</section>

						<section>
							<h4>Form</h4>
							<form method="post" action="#">
								<div class="row gtr-uniform gtr-50">
									<div class="col-6 col-12-xsmall">
										<input type="text" name="demo-name" id="demo-name" value="" placeholder="Name" />
									</div>
									<div class="col-6 col-12-xsmall">
										<input type="email" name="demo-email" id="demo-email" value="" placeholder="Email" />
									</div>
									<div class="col-12">
										<select name="demo-category" id="demo-category">
											<option value="">- Category -</option>
											<option value="1">Manufacturing</option>
											<option value="1">Shipping</option>
											<option value="1">Administration</option>
											<option value="1">Human Resources</option>
										</select>
									</div>
									<div class="col-4 col-12-small">
										<input type="radio" id="demo-priority-low" name="demo-priority" checked>
										<label for="demo-priority-low">Low Priority</label>
									</div>
									<div class="col-4 col-12-small">
										<input type="radio" id="demo-priority-normal" name="demo-priority">
										<label for="demo-priority-normal">Normal Priority</label>
									</div>
									<div class="col-4 col-12-small">
										<input type="radio" id="demo-priority-high" name="demo-priority">
										<label for="demo-priority-high">High Priority</label>
									</div>
									<div class="col-6 col-12-small">
										<input type="checkbox" id="demo-copy" name="demo-copy">
										<label for="demo-copy">Email me a copy of this message</label>
									</div>
									<div class="col-6 col-12-small">
										<input type="checkbox" id="demo-human" name="demo-human" checked>
										<label for="demo-human">I am a human and not a robot</label>
									</div>
									<div class="col-12">
										<textarea name="demo-message" id="demo-message" placeholder="Enter your message" rows="6"></textarea>
									</div>
									<div class="col-12">
										<ul class="actions">
											<li><input type="submit" value="Send Message" class="primary" /></li>
											<li><input type="reset" value="Reset" /></li>
										</ul>
									</div>
								</div>
							</form>
						</section>

						<section>
							<h4>Image</h4>
							<h5>Fit</h5>
							<div class="box alt">
								<div class="row gtr-50 gtr-uniform">
									<div class="col-12"><span class="image fit"><img src="images/fulls/05.jpg" alt="" /></span></div>
									<div class="col-4"><span class="image fit"><img src="images/thumbs/01.jpg" alt="" /></span></div>
									<div class="col-4"><span class="image fit"><img src="images/thumbs/02.jpg" alt="" /></span></div>
									<div class="col-4"><span class="image fit"><img src="images/thumbs/03.jpg" alt="" /></span></div>
									<div class="col-4"><span class="image fit"><img src="images/thumbs/04.jpg" alt="" /></span></div>
									<div class="col-4"><span class="image fit"><img src="images/thumbs/05.jpg" alt="" /></span></div>
									<div class="col-4"><span class="image fit"><img src="images/thumbs/06.jpg" alt="" /></span></div>
									<div class="col-4"><span class="image fit"><img src="images/thumbs/03.jpg" alt="" /></span></div>
									<div class="col-4"><span class="image fit"><img src="images/thumbs/02.jpg" alt="" /></span></div>
									<div class="col-4"><span class="image fit"><img src="images/thumbs/01.jpg" alt="" /></span></div>
								</div>
							</div>
							<h5>Left &amp; Right</h5>
							<p><span class="image left"><img src="images/avatar.jpg" alt="" /></span>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent.</p>
							<p><span class="image right"><img src="images/avatar.jpg" alt="" /></span>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent.</p>
						</section>

					</section>
				-->

			</div>
			
		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<ul class="icons">
						<li><a href="#" class="icon brands fa-github"><span class="label">Github</span></a></li>
						<li><a href="mailto:yglove96@naver.com" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; Untitled</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
