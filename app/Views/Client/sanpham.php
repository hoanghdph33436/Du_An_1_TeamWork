<!-- MAIN-CONTENT-SECTION START -->
<section class="main-content-section">
		<div class="container">
			<!-- BSTORE-BREADCRUMB START -->
			<div class="bstore-breadcrumb">
				<a href="index.html">HOMe</a>
				<span><i class="fa fa-caret-right"></i></span>
				<span>Women</span>
			</div>
			<!-- BSTORE-BREADCRUMB END -->

			<div class="row flex-row-reverse">
				<div class="col-lg-9">
					<div class="right-all-product">
						<!-- PRODUCT-CATEGORY-HEADER START -->
						<div class="product-category-header">
							<div class="category-header-image">
								<img src="../../../public/assets/images/category-header.webp" alt="category-header" />
								<div class="category-header-text">
									<h2>Women </h2>
									<strong>You will find here all woman fashion collections.</strong>
									<p>This category includes all the basics of your wardrobe and much more:<br />
										shoes, accessories, printed t-shirts, feminine dresses, women's jeans!</p>
								</div>
							</div>
						</div>
						<!-- PRODUCT-CATEGORY-HEADER END -->
						<div class="product-category-title">
							<!-- PRODUCT-CATEGORY-TITLE START -->
							<h1>
								<span class="cat-name">Women</span>
								<span class="count-product">There are 13 products.</span>
							</h1>
							<!-- PRODUCT-CATEGORY-TITLE END -->
						</div>
						<div class="product-shooting-area">

							<div class="product-shooting-bar">
								<!-- SHOORT-BY START -->
								<div class="shoort-by">
									<label for="productShort">Sắp xếp theo</label>
									<div class="short-select-option">
										<select name="" id="productShort">
											<option value="">--</option>
											<option value="">Price: Lowest first</option>
											<option value="">Price: Highest first</option>
											<option value="">Product Name: A to Z</option>
											<option value="">Product Name: Z to A</option>
											<option value="">In stock</option>
											<option value="">Reference: Lowest first</option>
											<option value="">Reference: Highest first</option>
										</select>
									</div>
								</div>
								<!-- SHOORT-BY END -->
								<!-- SHOW-PAGE START -->
								<!-- SHOW-PAGE END -->
								<!-- VIEW-SYSTEAM START -->
								
								<!-- VIEW-SYSTEAM END -->
							</div>

							<!-- PRODUCT-SHOOTING-RESULT START -->
							
							<!-- PRODUCT-SHOOTING-RESULT END -->

						</div>
					</div>
					<!-- ALL GATEGORY-PRODUCT START -->
					<div class="all-gategory-product">
						<div class="row gategory-product">
							<!-- SINGLE ITEM START -->
							<?php
								foreach ($listdmsp as $sp){
									$hinh ="../../../public/upload/".$sp['img'];
									$linkspct = "index.php?act=sanphamchitiet&id_sanpham=".$sp['id_sanpham']."&id_dm=".$sp['id_dm']."";
									echo '<div class="col-xl-3 col-md-4 col-sm-6 col-12">
									<div class="gategory-product-list">
										
										<div class="single-product-item">
											<div class="product-image">
												<a href="'.$linkspct.'"><img src="'.$hinh.'"
														alt="product-image" /></a>
												<a href="single-product.html" class="new-mark-box">new</a>
												<div class="overlay-content">
													<ul>
														<li><a href="'.$linkspct.'" title="Quick view"><i class="fa fa-search"></i></a>
														</li>
														<li><a href="#" title="Quick view"><i
																	class="fa fa-shopping-cart"></i></a></li>
														<li><a href="#" title="Quick view"><i class="fa fa-retweet"></i></a>
														</li>
														<li><a href="#" title="Quick view"><i class="fa fa-heart-o"></i></a>
														</li>
													</ul>
												</div>
											</div>
											<div class="product-info">
												<div class="customar-comments-box">
													<div class="rating-box">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star-half-empty"></i>
													</div>
													<div class="review-box">
														<span>1 Review(s)</span>
													</div>
												</div>
												<a href="single-product.html">'.$sp['ten_sanpham'].'</a>
												<div class="price-box">
													<span class="price">'.$sp['gia'].'VNĐ</span>
												</div>
											</div>
										</div>
									</div>
								</div>';
								}
							?>
							
							<!-- SINGLE ITEM END -->
							<!-- SINGLE ITEM START -->
							<div class="col-xl-3 col-md-4 col-sm-6 col-12">
								<div class="gategory-product-list">
									<div class="single-product-item">
										<div class="product-image">
											<a href="single-product.html"><img src="../../../public/assets/images/product/sale/1.webp"
													alt="product-image" /></a>
											<a href="single-product.html" class="new-mark-box">sale!</a>
											<div class="overlay-content">
												<ul>
													<li><a href="#" title="Quick view"><i class="fa fa-search"></i></a>
													</li>
													<li><a href="#" title="Quick view"><i
																class="fa fa-shopping-cart"></i></a></li>
													<li><a href="#" title="Quick view"><i class="fa fa-retweet"></i></a>
													</li>
													<li><a href="#" title="Quick view"><i class="fa fa-heart-o"></i></a>
													</li>
												</ul>
											</div>
										</div>
										<div class="product-info">
											<div class="customar-comments-box">
												<div class="rating-box">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="review-box">
													<span>1 Review(s)</span>
												</div>
											</div>
											<a href="single-product.html">Blouse</a>
											<div class="price-box">
												<span class="price">$22.95</span>
												<span class="old-price">$27.00</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- SINGLE ITEM END -->
							<!-- SINGLE ITEM START -->
							<div class="col-xl-3 col-md-4 col-sm-6 col-12">
								<div class="gategory-product-list">
									<div class="single-product-item">
										<div class="product-image">
											<a href="single-product.html"><img src="../../../public/assets/images/product/sale/9.webp"
													alt="product-image" /></a>
											<a href="single-product.html" class="new-mark-box">sale!</a>
											<div class="overlay-content">
												<ul>
													<li><a href="#" title="Quick view"><i class="fa fa-search"></i></a>
													</li>
													<li><a href="#" title="Quick view"><i
																class="fa fa-shopping-cart"></i></a></li>
													<li><a href="#" title="Quick view"><i class="fa fa-retweet"></i></a>
													</li>
													<li><a href="#" title="Quick view"><i class="fa fa-heart-o"></i></a>
													</li>
												</ul>
											</div>
										</div>
										<div class="product-info">
											<div class="customar-comments-box">
												<div class="rating-box">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-half-empty"></i>
													<i class="fa fa-star-half-empty"></i>
												</div>
												<div class="review-box">
													<span>1 Review(s)</span>
												</div>
											</div>
											<a href="single-product.html">Printed Dress</a>
											<div class="price-box">
												<span class="price">$23.40</span>
												<span class="old-price">$26.00</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- SINGLE ITEM END -->
							<!-- SINGLE ITEM START -->
							<div class="col-xl-3 col-md-4 col-sm-6 col-12">
								<div class="gategory-product-list">
									<div class="single-product-item">
										<div class="product-image">
											<a href="single-product.html"><img src="../../../public/assets/images/product/sale/5.webp"
													alt="product-image" /></a>
											<a href="single-product.html" class="new-mark-box">new</a>
											<div class="overlay-content">
												<ul>
													<li><a href="#" title="Quick view"><i class="fa fa-search"></i></a>
													</li>
													<li><a href="#" title="Quick view"><i
																class="fa fa-shopping-cart"></i></a></li>
													<li><a href="#" title="Quick view"><i class="fa fa-retweet"></i></a>
													</li>
													<li><a href="#" title="Quick view"><i class="fa fa-heart-o"></i></a>
													</li>
												</ul>
											</div>
										</div>
										<div class="product-info">
											<div class="customar-comments-box">
												<div class="rating-box">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-half-empty"></i>
												</div>
												<div class="review-box">
													<span>2 Review(s)</span>
												</div>
											</div>
											<a href="single-product.html">Printed Dress</a>
											<div class="price-box">
												<span class="price">$50.99</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- SINGLE ITEM END -->
							<!-- SINGLE ITEM START -->
							<div class="col-xl-3 col-md-4 col-sm-6 col-12">
								<div class="gategory-product-list">
									<div class="single-product-item">
										<div class="product-image">
											<a href="single-product.html"><img src="../../../public/assets/images/product/sale/13.webp"
													alt="product-image" /></a>
											<a href="single-product.html" class="new-mark-box">new</a>
											<div class="overlay-content">
												<ul>
													<li><a href="#" title="Quick view"><i class="fa fa-search"></i></a>
													</li>
													<li><a href="#" title="Quick view"><i
																class="fa fa-shopping-cart"></i></a></li>
													<li><a href="#" title="Quick view"><i class="fa fa-retweet"></i></a>
													</li>
													<li><a href="#" title="Quick view"><i class="fa fa-heart-o"></i></a>
													</li>
												</ul>
											</div>
										</div>
										<div class="product-info">
											<div class="customar-comments-box">
												<div class="rating-box">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="review-box">
													<span>1 Review(s)</span>
												</div>
											</div>
											<a href="single-product.html">Printed Summer Dress </a>
											<div class="price-box">
												<span class="price">$30.50</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- SINGLE ITEM END -->
							<!-- SINGLE ITEM START -->
							<div class="col-xl-3 col-md-4 col-sm-6 col-12">
								<div class="gategory-product-list">
									<div class="single-product-item">
										<div class="product-image">
											<a href="single-product.html"><img src="../../../public/assets/images/product/sale/11.webp"
													alt="product-image" /></a>
											<a href="single-product.html" class="new-mark-box">new</a>
											<div class="overlay-content">
												<ul>
													<li><a href="#" title="Quick view"><i class="fa fa-search"></i></a>
													</li>
													<li><a href="#" title="Quick view"><i
																class="fa fa-shopping-cart"></i></a></li>
													<li><a href="#" title="Quick view"><i class="fa fa-retweet"></i></a>
													</li>
													<li><a href="#" title="Quick view"><i class="fa fa-heart-o"></i></a>
													</li>
												</ul>
											</div>
										</div>
										<div class="product-info">
											<div class="customar-comments-box">
												<div class="rating-box">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-half-empty"></i>
													<i class="fa fa-star-half-empty"></i>
												</div>
												<div class="review-box">
													<span>1 Review(s)</span>
												</div>
											</div>
											<a href="single-product.html">Printed Dress</a>
											<div class="price-box">
												<span class="price">$26.00</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- SINGLE ITEM END -->
							<!-- SINGLE ITEM START -->
							<div class="col-xl-3 col-md-4 col-sm-6 col-12">
								<div class="gategory-product-list">
									<div class="single-product-item">
										<div class="product-image">
											<a href="single-product.html"><img src="../../../public/assets/images/product/sale/3.webp"
													alt="product-image" /></a>
											<a href="single-product.html" class="new-mark-box">new</a>
											<div class="overlay-content">
												<ul>
													<li><a href="#" title="Quick view"><i class="fa fa-search"></i></a>
													</li>
													<li><a href="#" title="Quick view"><i
																class="fa fa-shopping-cart"></i></a></li>
													<li><a href="#" title="Quick view"><i class="fa fa-retweet"></i></a>
													</li>
													<li><a href="#" title="Quick view"><i class="fa fa-heart-o"></i></a>
													</li>
												</ul>
											</div>
										</div>
										<div class="product-info">
											<div class="customar-comments-box">
												<div class="rating-box">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-half-empty"></i>
												</div>
												<div class="review-box">
													<span>1 Review(s)</span>
												</div>
											</div>
											<a href="single-product.html">Faded Short Sleeves T-shirt</a>
											<div class="price-box">
												<span class="price">$16.51</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- SINGLE ITEM END -->
							<!-- SINGLE ITEM START -->
							<div class="col-xl-3 col-md-4 col-sm-6 col-12">
								<div class="gategory-product-list">
									<div class="single-product-item">
										<div class="product-image">
											<a href="single-product.html"><img src="../../../public/assets/images/product/sale/2.webp"
													alt="product-image" /></a>
											<a href="single-product.html" class="new-mark-box">new</a>
											<div class="overlay-content">
												<ul>
													<li><a href="#" title="Quick view"><i class="fa fa-search"></i></a>
													</li>
													<li><a href="#" title="Quick view"><i
																class="fa fa-shopping-cart"></i></a></li>
													<li><a href="#" title="Quick view"><i class="fa fa-retweet"></i></a>
													</li>
													<li><a href="#" title="Quick view"><i class="fa fa-heart-o"></i></a>
													</li>
												</ul>
											</div>
										</div>
										<div class="product-info">
											<div class="customar-comments-box">
												<div class="rating-box">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="review-box">
													<span>1 Review(s)</span>
												</div>
											</div>
											<a href="single-product.html">Blouse</a>
											<div class="price-box">
												<span class="price">$27.00</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- SINGLE ITEM END -->
							<!-- SINGLE ITEM START -->
							<div class="col-xl-3 col-md-4 col-sm-6 col-12">
								<div class="gategory-product-list">
									<div class="single-product-item">
										<div class="product-image">
											<a href="single-product.html"><img src="../../../public/assets/images/product/sale/4.webp"
													alt="product-image" /></a>
											<a href="single-product.html" class="new-mark-box">new</a>
											<div class="overlay-content">
												<ul>
													<li><a href="#" title="Quick view"><i class="fa fa-search"></i></a>
													</li>
													<li><a href="#" title="Quick view"><i
																class="fa fa-shopping-cart"></i></a></li>
													<li><a href="#" title="Quick view"><i class="fa fa-retweet"></i></a>
													</li>
													<li><a href="#" title="Quick view"><i class="fa fa-heart-o"></i></a>
													</li>
												</ul>
											</div>
										</div>
										<div class="product-info">
											<div class="customar-comments-box">
												<div class="rating-box">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-half-empty"></i>
												</div>
												<div class="review-box">
													<span>1 Review(s)</span>
												</div>
											</div>
											<a href="single-product.html">Faded Short Sleeves T-shirt</a>
											<div class="price-box">
												<span class="price">$16.51</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- SINGLE ITEM END -->
							<!-- SINGLE ITEM START -->
							<div class="col-xl-3 col-md-4 col-sm-6 col-12">
								<div class="gategory-product-list">
									<div class="single-product-item">
										<div class="product-image">
											<a href="single-product.html"><img src="../../../public/assets/images/product/sale/7.webp"
													alt="product-image" /></a>
											<a href="single-product.html" class="new-mark-box">new</a>
											<div class="overlay-content">
												<ul>
													<li><a href="#" title="Quick view"><i class="fa fa-search"></i></a>
													</li>
													<li><a href="#" title="Quick view"><i
																class="fa fa-shopping-cart"></i></a></li>
													<li><a href="#" title="Quick view"><i class="fa fa-retweet"></i></a>
													</li>
													<li><a href="#" title="Quick view"><i class="fa fa-heart-o"></i></a>
													</li>
												</ul>
											</div>
										</div>
										<div class="product-info">
											<div class="customar-comments-box">
												<div class="rating-box">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-half-empty"></i>
													<i class="fa fa-star-half-empty"></i>
												</div>
												<div class="review-box">
													<span>1 Review(s)</span>
												</div>
											</div>
											<a href="single-product.html">Printed Chiffon Dress </a>
											<div class="price-box">
												<span class="price">$16.40</span>
												<span class="old-price">$20.50</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- SINGLE ITEM END -->
							<!-- SINGLE ITEM START -->
							<div class="col-xl-3 col-md-4 col-sm-6 col-12">
								<div class="gategory-product-list">
									<div class="single-product-item">
										<div class="product-image">
											<a href="single-product.html"><img src="../../../public/assets/images/product/sale/9.webp"
													alt="product-image" /></a>
											<a href="single-product.html" class="new-mark-box">sale!</a>
											<div class="overlay-content">
												<ul>
													<li><a href="#" title="Quick view"><i class="fa fa-search"></i></a>
													</li>
													<li><a href="#" title="Quick view"><i
																class="fa fa-shopping-cart"></i></a></li>
													<li><a href="#" title="Quick view"><i class="fa fa-retweet"></i></a>
													</li>
													<li><a href="#" title="Quick view"><i class="fa fa-heart-o"></i></a>
													</li>
												</ul>
											</div>
										</div>
										<div class="product-info">
											<div class="customar-comments-box">
												<div class="rating-box">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-half-empty"></i>
													<i class="fa fa-star-half-empty"></i>
												</div>
												<div class="review-box">
													<span>1 Review(s)</span>
												</div>
											</div>
											<a href="single-product.html">Printed Dress</a>
											<div class="price-box">
												<span class="price">$23.40</span>
												<span class="old-price">$26.00</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- SINGLE ITEM END -->
							<!-- SINGLE ITEM START -->
							<div class="col-xl-3 col-md-4 col-sm-6 col-12">
								<div class="gategory-product-list">
									<div class="single-product-item">
										<div class="product-image">
											<a href="single-product.html"><img src="../../../public/assets/images/product/sale/10.webp"
													alt="product-image" /></a>
											<a href="single-product.html" class="new-mark-box">new</a>
											<div class="overlay-content">
												<ul>
													<li><a href="#" title="Quick view"><i class="fa fa-search"></i></a>
													</li>
													<li><a href="#" title="Quick view"><i
																class="fa fa-shopping-cart"></i></a></li>
													<li><a href="#" title="Quick view"><i class="fa fa-retweet"></i></a>
													</li>
													<li><a href="#" title="Quick view"><i class="fa fa-heart-o"></i></a>
													</li>
												</ul>
											</div>
										</div>
										<div class="product-info">
											<div class="customar-comments-box">
												<div class="rating-box">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-half-empty"></i>
													<i class="fa fa-star-half-empty"></i>
												</div>
												<div class="review-box">
													<span>1 Review(s)</span>
												</div>
											</div>
											<a href="single-product.html">Printed Dress</a>
											<div class="price-box">
												<span class="price">$26.00</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- SINGLE ITEM END -->
							<!-- SINGLE ITEM START -->
							<div class="col-xl-3 col-md-4 col-sm-6 col-12">
								<div class="gategory-product-list">
									<div class="single-product-item">
										<div class="product-image">
											<a href="single-product.html"><img src="../../../public/assets/images/product/sale/10.webp"
													alt="product-image" /></a>
											<a href="single-product.html" class="new-mark-box">new</a>
											<div class="overlay-content">
												<ul>
													<li><a href="#" title="Quick view"><i class="fa fa-search"></i></a>
													</li>
													<li><a href="#" title="Quick view"><i
																class="fa fa-shopping-cart"></i></a></li>
													<li><a href="#" title="Quick view"><i class="fa fa-retweet"></i></a>
													</li>
													<li><a href="#" title="Quick view"><i class="fa fa-heart-o"></i></a>
													</li>
												</ul>
											</div>
										</div>
										<div class="product-info">
											<div class="customar-comments-box">
												<div class="rating-box">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-half-empty"></i>
													<i class="fa fa-star-half-empty"></i>
												</div>
												<div class="review-box">
													<span>1 Review(s)</span>
												</div>
											</div>
											<a href="single-product.html">Printed Dress</a>
											<div class="price-box">
												<span class="price">$26.00</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- SINGLE ITEM END -->
							<!-- SINGLE ITEM START -->
							<div class="col-xl-3 col-md-4 col-sm-6 col-12">
								<div class="gategory-product-list">
									<div class="single-product-item">
										<div class="product-image">
											<a href="single-product.html"><img src="../../../public/assets/images/product/sale/3.webp"
													alt="product-image" /></a>
											<a href="single-product.html" class="new-mark-box">new</a>
											<div class="overlay-content">
												<ul>
													<li><a href="#" title="Quick view"><i class="fa fa-search"></i></a>
													</li>
													<li><a href="#" title="Quick view"><i
																class="fa fa-shopping-cart"></i></a></li>
													<li><a href="#" title="Quick view"><i class="fa fa-retweet"></i></a>
													</li>
													<li><a href="#" title="Quick view"><i class="fa fa-heart-o"></i></a>
													</li>
												</ul>
											</div>
										</div>
										<div class="product-info">
											<div class="customar-comments-box">
												<div class="rating-box">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-half-empty"></i>
												</div>
												<div class="review-box">
													<span>1 Review(s)</span>
												</div>
											</div>
											<a href="single-product.html">Faded Short Sleeves T-shirt</a>
											<div class="price-box">
												<span class="price">$16.51</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- SINGLE ITEM END -->
							<!-- SINGLE ITEM START -->
							<div class="col-xl-3 col-md-4 col-sm-6 col-12">
								<div class="gategory-product-list">
									<div class="single-product-item">
										<div class="product-image">
											<a href="single-product.html"><img src="../../../public/assets/images/product/sale/1.webp"
													alt="product-image" /></a>
											<a href="single-product.html" class="new-mark-box">sale!</a>
											<div class="overlay-content">
												<ul>
													<li><a href="#" title="Quick view"><i class="fa fa-search"></i></a>
													</li>
													<li><a href="#" title="Quick view"><i
																class="fa fa-shopping-cart"></i></a></li>
													<li><a href="#" title="Quick view"><i class="fa fa-retweet"></i></a>
													</li>
													<li><a href="#" title="Quick view"><i class="fa fa-heart-o"></i></a>
													</li>
												</ul>
											</div>
										</div>
										<div class="product-info">
											<div class="customar-comments-box">
												<div class="rating-box">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="review-box">
													<span>1 Review(s)</span>
												</div>
											</div>
											<a href="single-product.html">Blouse</a>
											<div class="price-box">
												<span class="price">$22.95</span>
												<span class="old-price">$27.00</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- SINGLE ITEM END -->
							<!-- SINGLE ITEM START -->
							<div class="col-xl-3 col-md-4 col-sm-6 col-12">
								<div class="gategory-product-list">
									<div class="single-product-item">
										<div class="product-image">
											<a href="single-product.html"><img src="../../../public/assets/images/product/sale/9.webp"
													alt="product-image" /></a>
											<a href="single-product.html" class="new-mark-box">sale!</a>
											<div class="overlay-content">
												<ul>
													<li><a href="#" title="Quick view"><i class="fa fa-search"></i></a>
													</li>
													<li><a href="#" title="Quick view"><i
																class="fa fa-shopping-cart"></i></a></li>
													<li><a href="#" title="Quick view"><i class="fa fa-retweet"></i></a>
													</li>
													<li><a href="#" title="Quick view"><i class="fa fa-heart-o"></i></a>
													</li>
												</ul>
											</div>
										</div>
										<div class="product-info">
											<div class="customar-comments-box">
												<div class="rating-box">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-half-empty"></i>
													<i class="fa fa-star-half-empty"></i>
												</div>
												<div class="review-box">
													<span>1 Review(s)</span>
												</div>
											</div>
											<a href="single-product.html">Printed Dress</a>
											<div class="price-box">
												<span class="price">$23.40</span>
												<span class="old-price">$26.00</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- SINGLE ITEM END -->
						</div>
					</div>
					<!-- ALL GATEGORY-PRODUCT END -->
					<!-- PRODUCT-SHOOTING-RESULT START -->
					<div class="product-shooting-result product-shooting-result-border">
						<form action="#">
							<button class="btn compare-button">
								Compare (<strong class="compare-value">1</strong>)
								<i class="fa fa-chevron-right"></i>
							</button>
						</form>
						<div class="showing-item">
							<span>Showing 1 - 12 of 13 items</span>
						</div>
						<div class="showing-next-prev">
							<ul class="pagination-bar">
								<li class="disabled">
									<a href="#"><i class="fa fa-chevron-left"></i>Previous</a>
								</li>
								<li class="active">
									<span><a class="pagi-num" href="#">1</a></span>
								</li>
								<li>
									<span><a class="pagi-num" href="#">2</a></span>
								</li>
								<li>
									<a href="#">Next<i class="fa fa-chevron-right"></i></a>
								</li>
							</ul>
							<form action="#">
								<button class="btn showall-button">Show all</button>
							</form>
						</div>
					</div>
					<!-- PRODUCT-SHOOTING-RESULT END -->
				</div>
				<div class="col-lg-3">
					<!-- PRODUCT-LEFT-SIDEBAR START -->
					<div class="product-left-sidebar">
						<h2 class="left-title pro-g-page-title">Catalog</h2>
						<!-- SINGLE SIDEBAR ENABLED FILTERS START -->
						<div class="product-single-sidebar">
							<span class="sidebar-title">Danh mục</span>
							<ul class="filtering-menu">
								<?php
									foreach ($listdm as $dm){
										extract($dm);
										$linkdm="index.php?act=loadsp&id_dm=".$id_dm;
										echo '
										
										<a href="'.$linkdm.'"><li>'.$ten_dm.'</li></a>
									
									';
									}
								?>
								
							</ul>
						</div>
						<!-- SINGLE SIDEBAR ENABLED FILTERS END -->
						<!-- SINGLE SIDEBAR CATEGORIES START -->
						
						<!-- SINGLE SIDEBAR CATEGORIES END -->
						<!-- SINGLE SIDEBAR AVAILABILITY START -->
						
						<!-- SINGLE SIDEBAR AVAILABILITY END -->
						<!-- SINGLE SIDEBAR CONDITION START -->
						
						<!-- SINGLE SIDEBAR CONDITION END -->
						<!-- SINGLE SIDEBAR MANUFACTURER START -->
						
						<!-- SINGLE SIDEBAR MANUFACTURER END -->
						<!-- SINGLE SIDEBAR PRICE START -->
						
						<!-- SINGLE SIDEBAR PRICE END -->
						<!-- SINGLE SIDEBAR SIZE START -->
						
						<!-- SINGLE SIDEBAR SIZE END -->
						<!-- SINGLE SIDEBAR COLOR START -->
						
						<!-- SINGLE SIDEBAR COLOR END -->
						<!-- SINGLE SIDEBAR COMPOSITIONS START -->
			
						<!-- SINGLE SIDEBAR COMPOSITIONS END -->
						<!-- SINGLE SIDEBAR STYLES START -->
						
						<!-- SINGLE SIDEBAR STYLES END -->
						<!-- SINGLE SIDEBAR PROPERTIES START -->
						<!-- <div class="product-single-sidebar">
							<span class="sidebar-title">Properties</span>
							<ul>
								<li>
									<label class="cheker">
										<input type="checkbox" name="properties" />
										<span></span>
									</label>
									<a href="#">Colorful Dress<span>(4)</span></a>
								</li>
								<li>
									<label class="cheker">
										<input type="checkbox" name="properties" />
										<span></span>
									</label>
									<a href="#">Maxi Dress <span>(1)</span></a>
								</li>
								<li>
									<label class="cheker">
										<input type="checkbox" name="properties" />
										<span></span>
									</label>
									<a href="#">Midi Dress<span>(2)</span></a>
								</li>
								<li>
									<label class="cheker">
										<input type="checkbox" name="properties" />
										<span></span>
									</label>
									<a href="#">Short Dress<span>(2)</span></a>
								</li>
								<li>
									<label class="cheker">
										<input type="checkbox" name="properties" />
										<span></span>
									</label>
									<a href="#"> Short Sleeve<span>(4)</span></a>
								</li>
							</ul>
						</div> -->
						<!-- SINGLE SIDEBAR PROPERTIES END -->
					</div>
					<!-- PRODUCT-LEFT-SIDEBAR END -->
					<!-- SINGLE SIDEBAR TAG START -->
					<div class="product-left-sidebar">
						<h2 class="left-title">Tags </h2>
						<div class="category-tag">
							<a href="#">fashion</a>
							<a href="#">handbags</a>
							<a href="#">women</a>
							<a href="#">men</a>
							<a href="#">kids</a>
							<a href="#">New</a>
							<a href="#">Accessories</a>
							<a href="#">clothing</a>
							<a href="#">New</a>
						</div>
					</div>
					<!-- SINGLE SIDEBAR TAG END -->
				</div>
			</div>
		</div>
	</section>
	<!-- MAIN-CONTENT-SECTION END -->

	<!-- BRAND-CLIENT-AREA START -->
	<section class="brand-client-area">
		<div class="container">
			<!-- BRAND-CLIENT-ROW START -->
			<div class="brand-client-row">
				<div class="center-title-area">
					<h2 class="center-title">BRAND & CLIENTS</h2>
				</div>
				<div class="carousel-wrap">
					<!-- CLIENT-CAROUSEL START -->
					<div class="client-carousel owl-carousel">

						<!-- CLIENT-SINGLE START -->
						<div class="single-client">
							<a href="#">
								<img src="../../../public/assets/images/brand/1.webp" alt="brand-client" />
							</a>
						</div>
						<!-- CLIENT-SINGLE END -->

						<!-- CLIENT-SINGLE START -->
						<div class="single-client">
							<a href="#">
								<img src="../../../public/assets/images/brand/2.webp" alt="brand-client" />
							</a>
						</div>
						<!-- CLIENT-SINGLE END -->

						<!-- CLIENT-SINGLE START -->
						<div class="single-client">
							<a href="#">
								<img src="../../../public/assets/images/brand/3.webp" alt="brand-client" />
							</a>
						</div>
						<!-- CLIENT-SINGLE END -->

						<!-- CLIENT-SINGLE START -->
						<div class="single-client">
							<a href="#">
								<img src="../../../public/assets/images/brand/4.webp" alt="brand-client" />
							</a>
						</div>
						<!-- CLIENT-SINGLE END -->

						<!-- CLIENT-SINGLE START -->
						<div class="single-client">
							<a href="#">
								<img src="../../../public/assets/images/brand/5.webp" alt="brand-client" />
							</a>
						</div>
						<!-- CLIENT-SINGLE END -->

						<!-- CLIENT-SINGLE START -->
						<div class="single-client">
							<a href="#">
								<img src="../../../public/assets/images/brand/1.webp" alt="brand-client" />
							</a>
						</div>
						<!-- CLIENT-SINGLE END -->

						<!-- CLIENT-SINGLE START -->
						<div class="single-client">
							<a href="#">
								<img src="../../../public/assets/images/brand/3.webp" alt="brand-client" />
							</a>
						</div>
						<!-- CLIENT-SINGLE END -->

						<!-- CLIENT-SINGLE START -->
						<div class="single-client">
							<a href="#">
								<img src="../../../public/assets/images/brand/2.webp" alt="brand-client" />
							</a>
						</div>
						<!-- CLIENT-SINGLE END -->

						<!-- CLIENT-SINGLE START -->
						<div class="single-client">
							<a href="#">
								<img src="../../../public/assets/images/brand/3.webp" alt="brand-client" />
							</a>
						</div>
						<!-- CLIENT-SINGLE END -->
						
					</div>
					<!-- CLIENT-CAROUSEL END -->
				</div>
			</div>
			<!-- BRAND-CLIENT-ROW END -->
		</div>
	</section>
	<!-- BRAND-CLIENT-AREA END -->

	<!-- COMPANY-FACALITY START -->
	<section class="company-facality">
		<div class="container">
			<div class="row g-4">
				<!-- SINGLE-FACALITY START -->
				<div class="col-lg-3 col-sm-6">
					<div class="single-facality">
						<div class="facality-icon">
							<i class="fa fa-rocket"></i>
						</div>
						<div class="facality-text">
							<h3 class="facality-heading-text">FREE SHIPPING</h3>
							<span>on order over $100</span>
						</div>
					</div>
				</div>
				<!-- SINGLE-FACALITY END -->
				<!-- SINGLE-FACALITY START -->
				<div class="col-lg-3 col-sm-6">
					<div class="single-facality">
						<div class="facality-icon">
							<i class="fa fa-umbrella"></i>
						</div>
						<div class="facality-text">
							<h3 class="facality-heading-text">24/7 SUPPORT</h3>
							<span>online consultations</span>
						</div>
					</div>
				</div>
				<!-- SINGLE-FACALITY END -->
				<!-- SINGLE-FACALITY START -->
				<div class="col-lg-3 col-sm-6">
					<div class="single-facality">
						<div class="facality-icon">
							<i class="fa fa-calendar"></i>
						</div>
						<div class="facality-text">
							<h3 class="facality-heading-text">DAILY UPDATES</h3>
							<span>Check out store for latest</span>
						</div>
					</div>
				</div>
				<!-- SINGLE-FACALITY END -->
				<!-- SINGLE-FACALITY START -->
				<div class="col-lg-3 col-sm-6">
					<div class="single-facality">
						<div class="facality-icon">
							<i class="fa fa-refresh"></i>
						</div>
						<div class="facality-text">
							<h3 class="facality-heading-text">30-DAY RETURNS</h3>
							<span>moneyback guarantee</span>
						</div>
					</div>
				</div>
				<!-- SINGLE-FACALITY END -->
			</div>
		</div>
	</section>
	<!-- COMPANY-FACALITY END -->