@extends('frontend.layouts.frontend')

@section('title', 'Travel World || News Details')

@push('styles')
<style>
  /**
* Template Name: HeroBiz
* File: variables.css
* Description: Easily customize colors, typography, and other repetitive properties used in the template main stylesheet file main.css
* 
* Template URL: https://bootstrapmade.com/herobiz-bootstrap-business-template/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
* 
* Contents:
* 1. HeroBiz template variables 
* 2. Override default Bootstrap variables
* 3. Set color and background class names
*
* Learn more about CSS variables at https://developer.mozilla.org/en-US/docs/Web/CSS/Using_CSS_custom_properties
*/

/*--------------------------------------------------------------
# 1. HeroBiz template variables 
--------------------------------------------------------------*/
:root {

/* Fonts */
--font-default: 'Open Sans', system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
--font-primary: 'Source Sans Pro', sans-serif;
--font-secondary: 'Poppins', sans-serif;

/* Colors */
/* The *-rgb color names are simply the RGB converted value of the corresponding color for use in the rgba() function */

/* Default text color */
--color-default: #1a1f24;
--color-default-rgb: 26, 31, 36;

/* Defult links color */
--color-links: #0ea2bd;
--color-links-hover: #1ec3e0;

/* Primay colors */
--color-primary: #0ea2bd;
--color-primary-light: #1ec3e0;
--color-primary-dark: #0189a1;

--color-primary-rgb: 14, 162, 189;
--color-primary-light-rgb: 30, 195, 224;
--color-primary-dark-rgb: 1, 137, 161;

/* Secondary colors */
--color-secondary: #485664;
--color-secondary-light: #8f9fae;
--color-secondary-dark: #3a4753;

--color-secondary-rgb: 72, 86, 100;
--color-secondary-light-rgb: 143, 159, 174;
--color-secondary-dark-rgb: 58, 71, 83;

/* General colors */
--color-blue: #0d6efd;
--color-blue-rgb: 13, 110, 253;

--color-indigo: #6610f2;
--color-indigo-rgb: 102, 16, 242;

--color-purple: #6f42c1;
--color-purple-rgb: 111, 66, 193;

--color-pink: #f3268c;
--color-pink-rgb: 243, 38, 140;

--color-red: #df1529;
--color-red-rgb: 223, 21, 4;

--color-orange: #fd7e14;
--color-orange-rgb: 253, 126, 20;

--color-yellow: #ffc107;
--color-yellow-rgb: 255, 193, 7;

--color-green: #059652;
--color-green-rgb: 5, 150, 82;

--color-teal: #20c997;
--color-teal-rgb: 32, 201, 151;

--color-cyan: #0dcaf0;
--color-cyan-rgb: 13, 202, 240;

--color-white: #ffffff;
--color-white-rgb: 255, 255, 255;

--color-gray: #6c757d;
--color-gray-rgb: 108, 117, 125;

--color-black: #000000;
--color-black-rgb: 0, 0, 0;

}

/*--------------------------------------------------------------
# 2. Override default Bootstrap variables
--------------------------------------------------------------*/
:root {

--bs-blue: var(--color-blue);
--bs-indigo: var(--color-indigo);
--bs-purple: var(--color-purple);
--bs-pink: var(--color-pink);
--bs-red: var(--color-red);
--bs-orange: var(--color-orange);
--bs-yellow: var(--color-yellow);
--bs-green: var(--color-green);
--bs-teal: var(--color-teal);
--bs-cyan: var(--color-cyan);
--bs-white: var(--color-white);
--bs-gray: var(--color-gray);
--bs-gray-dark: #343a40;
--bs-gray-100: #f8f9fa;
--bs-gray-200: #e9ecef;
--bs-gray-300: #dee2e6;
--bs-gray-400: #ced4da;
--bs-gray-500: #adb5bd;
--bs-gray-600: #6c757d;
--bs-gray-700: #495057;
--bs-gray-800: #343a40;
--bs-gray-900: #212529;
--bs-primary: var(--color-blue);
--bs-secondary: var(--color-blue);
--bs-success: #198754;
--bs-info: #0dcaf0;
--bs-warning: #ffc107;
--bs-danger: #dc3545;
--bs-light: #f8f9fa;
--bs-dark: #212529;
--bs-primary-rgb: var(--color-primary-rgb);
--bs-secondary-rgb: var(--color-secondary-rgb);
--bs-success-rgb: 25, 135, 84;
--bs-info-rgb: 13, 202, 240;
--bs-warning-rgb: 255, 193, 7;
--bs-danger-rgb: 220, 53, 69;
--bs-light-rgb: 248, 249, 250;
--bs-dark-rgb: 33, 37, 41;
--bs-white-rgb: var(--color-white-rgb);
--bs-black-rgb: var(--color-black-rgb);
--bs-body-color-rgb: var(--color-default-rgb);
--bs-body-bg-rgb: 255, 255, 255;
--bs-font-sans-serif: var(--font-default);
--bs-font-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
--bs-gradient: linear-gradient(180deg, rgba(255, 255, 255, 0.15), rgba(255, 255, 255, 0));
--bs-body-font-family: var(--font-default);
--bs-body-font-size: 1rem;
--bs-body-font-weight: 400;
--bs-body-line-height: 1.5;
--bs-body-color: var(--color-default);
--bs-body-bg: #fff;

}

/*--------------------------------------------------------------
# 3. Set color and background class names
--------------------------------------------------------------*/
/* Fonts */
.font-default { font-family: var(--font-default) !important; }
.font-primary { font-family: var(--font-primary) !important;}
.font-secondary { font-family: var(--font-secondary) !important; }

/* Text Colors */
.color-default { color: var(--color-default) !important; }
.color-links { color: var(--color-links) !important; }
.color-links:hover { color: var(--color-links-hover) !important; }
.color-primary { color: var(--color-primary) !important; }
.color-primary-light { color: var(--color-primary-light) !important; }
.color-primary-dark { color: var(--color-primary-dark) !important; }
.color-secondary { color: var(--color-secondary) !important; }
.color-secondary-light { color: var(--color-secondary-light) !important; }
.color-secondary-dark { color: var(--color-secondary-dark) !important; }
.color-blue { color: var(--color-blue) !important; }
.color-indigo { color: var(--color-indigo) !important; }
.color-purple { color: var(--color-purple) !important; }
.color-pink { color: var(--color-pink) !important; }
.color-red { color: var(--color-red) !important; }
.color-orange { color: var(--color-orange) !important; }
.color-yellow { color: var(--color-yellow) !important; }
.color-green { color: var(--color-green) !important; }
.color-teal { color: var(--color-teal) !important; }
.color-cyan { color: var(--color-cyan) !important; }
.color-white { color: var(--color-white) !important; }
.color-gray { color: var(--color-gray) !important; }
.color-black { color: var(--color-black) !important; }

/* Background Colors */
.bg-default { background-color: var(--color-default) !important; }
.bg-primary { background-color: var(--color-primary) !important; }
.bg-primary-light { background-color: var(--color-primary-light) !important; }
.bg-primary-dark { background-color: var(--color-primary-dark) !important; }
.bg-secondary { background-color: var(--color-secondary) !important; }
.bg-secondary-light { background-color: var(--color-secondary-light) !important; }
.bg-secondary-dark { background-color: var(--color-secondary-dark) !important; }
.bg-blue { background-color: var(--color-blue) !important; }
.bg-indigo { background-color: var(--color-indigo) !important; }
.bg-purple { background-color: var(--color-purple) !important; }
.bg-pink { background-color: var(--color-pink) !important; }
.bg-red { background-color: var(--color-red) !important; }
.bg-orange { background-color: var(--color-orange) !important; }
.bg-yellow { background-color: var(--color-yellow) !important; }
.bg-green { background-color: var(--color-green) !important; }
.bg-teal { background-color: var(--color-teal) !important; }
.bg-cyan { background-color: var(--color-cyan) !important; }
.bg-white { background-color: var(--color-white) !important; }
.bg-gray { background-color: var(--color-gray) !important; }
.bg-black { background-color: var(--color-black) !important; }
/*--------------------------------------------------------------
# Blog Details Page
--------------------------------------------------------------*/
.blog .blog-details {
  box-shadow: 0 4px 16px rgba(var(--color-black-rgb), 0.1);
  padding: 30px;
}

.blog .blog-details .post-img {
  margin: -30px -30px 20px -30px;
  overflow: hidden;
}

.blog .blog-details .title {
  font-size: 28px;
  font-weight: 700;
  padding: 0;
  margin: 20px 0 0 0;
  color: var(--color-secondary);
}

.blog .blog-details .content {
  margin-top: 20px;
}

.blog .blog-details .content h3 {
  font-size: 22px;
  margin-top: 30px;
  font-weight: bold;
}

.blog .blog-details .content blockquote {
  overflow: hidden;
  background-color: rgba(var(--color-secondary-rgb), 0.06);
  padding: 60px;
  position: relative;
  text-align: center;
  margin: 20px 0;
}

.blog .blog-details .content blockquote p {
  color: var(--color-default);
  line-height: 1.6;
  margin-bottom: 0;
  font-style: italic;
  font-weight: 500;
  font-size: 22px;
}

.blog .blog-details .content blockquote:after {
  content: "";
  position: absolute;
  left: 0;
  top: 0;
  bottom: 0;
  width: 3px;
  background-color: var(--color-secondary);
  margin-top: 20px;
  margin-bottom: 20px;
}

.blog .blog-details .meta-top {
  margin-top: 20px;
  color: var(--color-gray);
}

.blog .blog-details .meta-top ul {
  display: flex;
  flex-wrap: wrap;
  list-style: none;
  align-items: center;
  padding: 0;
  margin: 0;
}

.blog .blog-details .meta-top ul li+li {
  padding-left: 20px;
}

.blog .blog-details .meta-top i {
  font-size: 16px;
  margin-right: 8px;
  line-height: 0;
  color: rgba(var(--color-primary-rgb), 0.8);
}

.blog .blog-details .meta-top a {
  color: var(--color-gray);
  font-size: 14px;
  display: inline-block;
  line-height: 1;
}

.blog .blog-details .meta-bottom {
  padding-top: 10px;
  border-top: 1px solid rgba(var(--color-secondary-rgb), 0.15);
}

.blog .blog-details .meta-bottom i {
  color: var(--color-secondary-light);
  display: inline;
}

.blog .blog-details .meta-bottom a {
  color: rgba(var(--color-secondary-rgb), 0.8);
  transition: 0.3s;
}

.blog .blog-details .meta-bottom a:hover {
  color: var(--color-primary);
}

.blog .blog-details .meta-bottom .cats {
  list-style: none;
  display: inline;
  padding: 0 20px 0 0;
  font-size: 14px;
}

.blog .blog-details .meta-bottom .cats li {
  display: inline-block;
}

.blog .blog-details .meta-bottom .tags {
  list-style: none;
  display: inline;
  padding: 0;
  font-size: 14px;
}

.blog .blog-details .meta-bottom .tags li {
  display: inline-block;
}

.blog .blog-details .meta-bottom .tags li+li::before {
  padding-right: 6px;
  color: var(--color-default);
  content: ",";
}

.blog .blog-details .meta-bottom .share {
  font-size: 16px;
}

.blog .blog-details .meta-bottom .share i {
  padding-left: 5px;
}

.blog .post-author {
  padding: 20px;
  margin-top: 30px;
  box-shadow: 0 4px 16px rgba(var(--color-black-rgb), 0.1);
}

.blog .post-author img {
  max-width: 120px;
  margin-right: 20px;
}

.blog .post-author h4 {
  font-weight: 600;
  font-size: 22px;
  margin-bottom: 0px;
  padding: 0;
  color: var(--color-secondary);
}

.blog .post-author .social-links {
  margin: 0 10px 10px 0;
}

.blog .post-author .social-links a {
  color: rgba(var(--color-secondary-rgb), 0.5);
  margin-right: 5px;
}

.blog .post-author p {
  font-style: italic;
  color: rgba(var(--color-gray-rgb), 0.8);
  margin-bottom: 0;
}

/*--------------------------------------------------------------
# Blog Sidebar
--------------------------------------------------------------*/
.blog .sidebar {
  padding: 30px;
  box-shadow: 0 4px 16px rgba(var(--color-black-rgb), 0.1);
}

.blog .sidebar .sidebar-title {
  font-size: 20px;
  font-weight: 700;
  padding: 0;
  margin: 0;
  color: var(--color-secondary);
}

.blog .sidebar .sidebar-item+.sidebar-item {
  margin-top: 40px;
}

.blog .sidebar .search-form form {
  background: var(--color-white);
  border: 1px solid rgba(var(--color-secondary-rgb), 0.3);
  padding: 3px 10px;
  position: relative;
}

.blog .sidebar .search-form form input[type=text] {
  border: 0;
  padding: 4px;
  border-radius: 4px;
  width: calc(100% - 40px);
}

.blog .sidebar .search-form form input[type=text]:focus {
  outline: none;
}

.blog .sidebar .search-form form button {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  border: 0;
  background: none;
  font-size: 16px;
  padding: 0 15px;
  margin: -1px;
  background: var(--color-primary);
  color: var(--color-white);
  transition: 0.3s;
  border-radius: 0 4px 4px 0;
  line-height: 0;
}

.blog .sidebar .search-form form button i {
  line-height: 0;
}

.blog .sidebar .search-form form button:hover {
  background: rgba(var(--color-primary-rgb), 0.8);
}

.blog .sidebar .categories ul {
  list-style: none;
  padding: 0;
}

.blog .sidebar .categories ul li+li {
  padding-top: 10px;
}

.blog .sidebar .categories ul a {
  color: var(--color-secondary);
  transition: 0.3s;
}

.blog .sidebar .categories ul a:hover {
  color: var(--color-default);
}

.blog .sidebar .categories ul a span {
  padding-left: 5px;
  color: rgba(var(--color-default-rgb), 0.4);
  font-size: 14px;
}

.blog .sidebar .recent-posts .post-item {
  display: flex;
}

.blog .sidebar .recent-posts .post-item+.post-item {
  margin-top: 15px;
}

.blog .sidebar .recent-posts img {
  width: 80px;
  margin-right: 15px;
}

.blog .sidebar .recent-posts h4 {
  font-size: 18px;
  font-weight: 400;
}

.blog .sidebar .recent-posts h4 a {
  color: var(--color-secondary);
  transition: 0.3s;
}

.blog .sidebar .recent-posts h4 a:hover {
  color: var(--color-primary);
}

.blog .sidebar .recent-posts time {
  display: block;
  font-style: italic;
  font-size: 14px;
  color: rgba(var(--color-default-rgb), 0.4);
}

.blog .sidebar .tags {
  margin-bottom: -10px;
}

.blog .sidebar .tags ul {
  list-style: none;
  padding: 0;
}

.blog .sidebar .tags ul li {
  display: inline-block;
}

.blog .sidebar .tags ul a {
  color: var(--color-secondary-light);
  font-size: 14px;
  padding: 6px 14px;
  margin: 0 6px 8px 0;
  border: 1px solid rgba(var(--color-secondary-light-rgb), 0.8);
  display: inline-block;
  transition: 0.3s;
}

.blog .sidebar .tags ul a:hover {
  color: var(--color-white);
  border: 1px solid var(--color-primary);
  background: var(--color-primary);
}

.blog .sidebar .tags ul a span {
  padding-left: 5px;
  color: rgba(var(--color-secondary-light-rgb), 0.8);
  font-size: 14px;
}

/*--------------------------------------------------------------
# Blog Comments
--------------------------------------------------------------*/
.blog .comments {
  margin-top: 30px;
}

.blog .comments .comments-count {
  font-weight: bold;
}

.blog .comments .comment {
  margin-top: 30px;
  position: relative;
}

.blog .comments .comment .comment-img {
  margin-right: 14px;
}

.blog .comments .comment .comment-img img {
  width: 60px;
}

.blog .comments .comment h5 {
  font-size: 16px;
  margin-bottom: 2px;
}

.blog .comments .comment h5 a {
  font-weight: bold;
  color: var(--color-default);
  transition: 0.3s;
}

.blog .comments .comment h5 a:hover {
  color: var(--color-primary);
}

.blog .comments .comment h5 .reply {
  padding-left: 10px;
  color: var(--color-secondary);
}

.blog .comments .comment h5 .reply i {
  font-size: 20px;
}

.blog .comments .comment time {
  display: block;
  font-size: 14px;
  color: rgba(var(--color-secondary-rgb), 0.8);
  margin-bottom: 5px;
}

.blog .comments .comment.comment-reply {
  padding-left: 40px;
}

.blog .comments .reply-form {
  margin-top: 30px;
  padding: 30px;
  box-shadow: 0 4px 16px rgba(var(--color-black-rgb), 0.1);
}

.blog .comments .reply-form h4 {
  font-weight: bold;
  font-size: 22px;
}

.blog .comments .reply-form p {
  font-size: 14px;
}

.blog .comments .reply-form input {
  border-radius: 4px;
  padding: 10px 10px;
  font-size: 14px;
}

.blog .comments .reply-form input:focus {
  box-shadow: none;
  border-color: rgba(var(--color-primary-rgb), 0.8);
}

.blog .comments .reply-form textarea {
  border-radius: 4px;
  padding: 10px 10px;
  font-size: 14px;
}

.blog .comments .reply-form textarea:focus {
  box-shadow: none;
  border-color: rgba(var(--color-primary-rgb), 0.8);
}

.blog .comments .reply-form .form-group {
  margin-bottom: 25px;
}

.blog .comments .reply-form .btn-primary {
  border-radius: 4px;
  padding: 10px 20px;
  border: 0;
  background-color: var(--color-secondary);
}

.blog .comments .reply-form .btn-primary:hover {
  background-color: rgba(var(--color-secondary-rgb), 0.8);
}
</style
@section('content')

<section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row g-5">

          <div class="col-lg-8">

            <article class="blog-details">

              <div class="post-img">
                <img src="images/blog/blog-recent-4.jpg" alt="" class="img-fluid">
              </div>

              <h2 class="title">Dolorum optio tempore voluptas dignissimos cumque fuga qui quibusdam quia</h2>

              <div class="meta-top">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="">John Doe</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href=""><time datetime="2020-01-01">Jan 1, 2022</time></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="">12 Comments</a></li>
                </ul>
              </div><!-- End meta top -->

              <div class="content">
                <p>
                  Similique neque nam consequuntur ad non maxime aliquam quas. Quibusdam animi praesentium. Aliquam et laboriosam eius aut nostrum quidem aliquid dicta.
                  Et eveniet enim. Qui velit est ea dolorem doloremque deleniti aperiam unde soluta. Est cum et quod quos aut ut et sit sunt. Voluptate porro consequatur assumenda perferendis dolore.
                </p>

                <p>
                  Sit repellat hic cupiditate hic ut nemo. Quis nihil sunt non reiciendis. Sequi in accusamus harum vel aspernatur. Excepturi numquam nihil cumque odio. Et voluptate cupiditate.
                </p>

                <blockquote>
                  <p>
                    Et vero doloremque tempore voluptatem ratione vel aut. Deleniti sunt animi aut. Aut eos aliquam doloribus minus autem quos.
                  </p>
                </blockquote>

                <p>
                  Sed quo laboriosam qui architecto. Occaecati repellendus omnis dicta inventore tempore provident voluptas mollitia aliquid. Id repellendus quia. Asperiores nihil magni dicta est suscipit perspiciatis. Voluptate ex rerum assumenda dolores nihil quaerat.
                  Dolor porro tempora et quibusdam voluptas. Beatae aut at ad qui tempore corrupti velit quisquam rerum. Omnis dolorum exercitationem harum qui qui blanditiis neque.
                  Iusto autem itaque. Repudiandae hic quae aspernatur ea neque qui. Architecto voluptatem magni. Vel magnam quod et tempora deleniti error rerum nihil tempora.
                </p>

                <h3>Et quae iure vel ut odit alias.</h3>
                <p>
                  Officiis animi maxime nulla quo et harum eum quis a. Sit hic in qui quos fugit ut rerum atque. Optio provident dolores atque voluptatem rem excepturi molestiae qui. Voluptatem laborum omnis ullam quibusdam perspiciatis nulla nostrum. Voluptatum est libero eum nesciunt aliquid qui.
                  Quia et suscipit non sequi. Maxime sed odit. Beatae nesciunt nesciunt accusamus quia aut ratione aspernatur dolor. Sint harum eveniet dicta exercitationem minima. Exercitationem omnis asperiores natus aperiam dolor consequatur id ex sed. Quibusdam rerum dolores sint consequatur quidem ea.
                  Beatae minima sunt libero soluta sapiente in rem assumenda. Et qui odit voluptatem. Cum quibusdam voluptatem voluptatem accusamus mollitia aut atque aut.
                </p>
                <img src="images/blog/blog-inside-post.jpg" class="img-fluid" alt="">

                <h3>Ut repellat blanditiis est dolore sunt dolorum quae.</h3>
                <p>
                  Rerum ea est assumenda pariatur quasi et quam. Facilis nam porro amet nostrum. In assumenda quia quae a id praesentium. Quos deleniti libero sed occaecati aut porro autem. Consectetur sed excepturi sint non placeat quia repellat incidunt labore. Autem facilis hic dolorum dolores vel.
                  Consectetur quasi id et optio praesentium aut asperiores eaque aut. Explicabo omnis quibusdam esse. Ex libero illum iusto totam et ut aut blanditiis. Veritatis numquam ut illum ut a quam vitae.
                </p>
                <p>
                  Alias quia non aliquid. Eos et ea velit. Voluptatem maxime enim omnis ipsa voluptas incidunt. Nulla sit eaque mollitia nisi asperiores est veniam.
                </p>

              </div><!-- End post content -->

              <div class="meta-bottom">
                <i class="bi bi-folder"></i>
                <ul class="cats">
                  <li><a href="#">Business</a></li>
                </ul>

                <i class="bi bi-tags"></i>
                <ul class="tags">
                  <li><a href="#">Creative</a></li>
                  <li><a href="#">Tips</a></li>
                  <li><a href="#">Marketing</a></li>
                </ul>
              </div><!-- End meta bottom -->

            </article><!-- End blog post -->

            <div class="post-author d-flex align-items-center">
              <img src="images/blog/blog-author.jpg" class="rounded-circle flex-shrink-0" alt="">
              <div>
                <h4>Jane Smith</h4>
                <div class="social-links">
                  <a href="https://twitters.com/#"><i class="bi bi-twitter"></i></a>
                  <a href="https://facebook.com/#"><i class="bi bi-facebook"></i></a>
                  <a href="https://instagram.com/#"><i class="biu bi-instagram"></i></a>
                </div>
                <p>
                  Itaque quidem optio quia voluptatibus dolorem dolor. Modi eum sed possimus accusantium. Quas repellat voluptatem officia numquam sint aspernatur voluptas. Esse et accusantium ut unde voluptas.
                </p>
              </div>
            </div><!-- End post author -->

            <div class="comments">

              <h4 class="comments-count">8 Comments</h4>

              <div id="comment-1" class="comment">
                <div class="d-flex">
                  <div class="comment-img"><img src="images/blog/comments-1.jpg" alt=""></div>
                  <div>
                    <h5><a href="">Georgia Reader</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                    <time datetime="2020-01-01">01 Jan,2022</time>
                    <p>
                      Et rerum totam nisi. Molestiae vel quam dolorum vel voluptatem et et. Est ad aut sapiente quis molestiae est qui cum soluta.
                      Vero aut rerum vel. Rerum quos laboriosam placeat ex qui. Sint qui facilis et.
                    </p>
                  </div>
                </div>
              </div><!-- End comment #1 -->

              <div id="comment-2" class="comment">
                <div class="d-flex">
                  <div class="comment-img"><img src="images/blog/comments-2.jpg" alt=""></div>
                  <div>
                    <h5><a href="">Aron Alvarado</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                    <time datetime="2020-01-01">01 Jan,2022</time>
                    <p>
                      Ipsam tempora sequi voluptatem quis sapiente non. Autem itaque eveniet saepe. Officiis illo ut beatae.
                    </p>
                  </div>
                </div>

                <div id="comment-reply-1" class="comment comment-reply">
                  <div class="d-flex">
                    <div class="comment-img"><img src="images/blog/comments-3.jpg" alt=""></div>
                    <div>
                      <h5><a href="">Lynda Small</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                      <time datetime="2020-01-01">01 Jan,2022</time>
                      <p>
                        Enim ipsa eum fugiat fuga repellat. Commodi quo quo dicta. Est ullam aspernatur ut vitae quia mollitia id non. Qui ad quas nostrum rerum sed necessitatibus aut est. Eum officiis sed repellat maxime vero nisi natus. Amet nesciunt nesciunt qui illum omnis est et dolor recusandae.

                        Recusandae sit ad aut impedit et. Ipsa labore dolor impedit et natus in porro aut. Magnam qui cum. Illo similique occaecati nihil modi eligendi. Pariatur distinctio labore omnis incidunt et illum. Expedita et dignissimos distinctio laborum minima fugiat.

                        Libero corporis qui. Nam illo odio beatae enim ducimus. Harum reiciendis error dolorum non autem quisquam vero rerum neque.
                      </p>
                    </div>
                  </div>

                  <div id="comment-reply-2" class="comment comment-reply">
                    <div class="d-flex">
                      <div class="comment-img"><img src="images/blog/comments-4.jpg" alt=""></div>
                      <div>
                        <h5><a href="">Sianna Ramsay</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                        <time datetime="2020-01-01">01 Jan,2022</time>
                        <p>
                          Et dignissimos impedit nulla et quo distinctio ex nemo. Omnis quia dolores cupiditate et. Ut unde qui eligendi sapiente omnis ullam. Placeat porro est commodi est officiis voluptas repellat quisquam possimus. Perferendis id consectetur necessitatibus.
                        </p>
                      </div>
                    </div>

                  </div><!-- End comment reply #2-->

                </div><!-- End comment reply #1-->

              </div><!-- End comment #2-->

              <div id="comment-3" class="comment">
                <div class="d-flex">
                  <div class="comment-img"><img src="images/blog/comments-5.jpg" alt=""></div>
                  <div>
                    <h5><a href="">Nolan Davidson</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                    <time datetime="2020-01-01">01 Jan,2022</time>
                    <p>
                      Distinctio nesciunt rerum reprehenderit sed. Iste omnis eius repellendus quia nihil ut accusantium tempore. Nesciunt expedita id dolor exercitationem aspernatur aut quam ut. Voluptatem est accusamus iste at.
                      Non aut et et esse qui sit modi neque. Exercitationem et eos aspernatur. Ea est consequuntur officia beatae ea aut eos soluta. Non qui dolorum voluptatibus et optio veniam. Quam officia sit nostrum dolorem.
                    </p>
                  </div>
                </div>

              </div><!-- End comment #3 -->

              <div id="comment-4" class="comment">
                <div class="d-flex">
                  <div class="comment-img"><img src="images/blog/comments-6.jpg" alt=""></div>
                  <div>
                    <h5><a href="">Kay Duggan</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                    <time datetime="2020-01-01">01 Jan,2022</time>
                    <p>
                      Dolorem atque aut. Omnis doloremque blanditiis quia eum porro quis ut velit tempore. Cumque sed quia ut maxime. Est ad aut cum. Ut exercitationem non in fugiat.
                    </p>
                  </div>
                </div>

              </div><!-- End comment #4 -->

              <div class="reply-form">

                <h4>Leave a Reply</h4>
                <p>Your email address will not be published. Required fields are marked * </p>
                <form action="">
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <input name="name" type="text" class="form-control" placeholder="Your Name*">
                    </div>
                    <div class="col-md-6 form-group">
                      <input name="email" type="text" class="form-control" placeholder="Your Email*">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col form-group">
                      <input name="website" type="text" class="form-control" placeholder="Your Website">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col form-group">
                      <textarea name="comment" class="form-control" placeholder="Your Comment*"></textarea>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary">Post Comment</button>

                </form>

              </div>

            </div><!-- End blog comments -->

          </div>

          <div class="col-lg-4">

            <div class="sidebar">

              <div class="sidebar-item search-form">
                <h3 class="sidebar-title">Search</h3>
                <form action="" class="mt-3">
                  <input type="text">
                  <button type="submit"><i class="bi bi-search"></i></button>
                </form>
              </div><!-- End sidebar search formn-->

              <div class="sidebar-item categories">
                <h3 class="sidebar-title">Categories</h3>
                <ul class="mt-3">
                  <li><a href="#">General <span>(25)</span></a></li>
                  <li><a href="#">Lifestyle <span>(12)</span></a></li>
                  <li><a href="#">Travel <span>(5)</span></a></li>
                  <li><a href="#">Design <span>(22)</span></a></li>
                  <li><a href="#">Creative <span>(8)</span></a></li>
                  <li><a href="#">Educaion <span>(14)</span></a></li>
                </ul>
              </div><!-- End sidebar categories-->

              <div class="sidebar-item recent-posts">
                <h3 class="sidebar-title">Recent Posts</h3>

                <div class="mt-3">

                  <div class="post-item mt-3">
                    <img src="images/blog/blog-recent-1.jpg" alt="" class="flex-shrink-0">
                    <div>
                      <h4><a href="blog-post.html">Nihil blanditiis at in nihil autem</a></h4>
                      <time datetime="2020-01-01">Jan 1, 2020</time>
                    </div>
                  </div><!-- End recent post item-->

                  <div class="post-item">
                    <img src="images/blog/blog-recent-2.jpg" alt="" class="flex-shrink-0">
                    <div>
                      <h4><a href="blog-post.html">Quidem autem et impedit</a></h4>
                      <time datetime="2020-01-01">Jan 1, 2020</time>
                    </div>
                  </div><!-- End recent post item-->

                  <div class="post-item">
                    <img src="images/blog/blog-recent-3.jpg" alt="" class="flex-shrink-0">
                    <div>
                      <h4><a href="blog-post.html">Id quia et et ut maxime similique occaecati ut</a></h4>
                      <time datetime="2020-01-01">Jan 1, 2020</time>
                    </div>
                  </div><!-- End recent post item-->

                  <div class="post-item">
                    <img src="images/blog/blog-recent-4.jpg" alt="" class="flex-shrink-0">
                    <div>
                      <h4><a href="blog-post.html">Laborum corporis quo dara net para</a></h4>
                      <time datetime="2020-01-01">Jan 1, 2020</time>
                    </div>
                  </div><!-- End recent post item-->

                  <div class="post-item">
                    <img src="images/blog/blog-recent-5.jpg" alt="" class="flex-shrink-0">
                    <div>
                      <h4><a href="blog-post.html">Et dolores corrupti quae illo quod dolor</a></h4>
                      <time datetime="2020-01-01">Jan 1, 2020</time>
                    </div>
                  </div><!-- End recent post item-->

                </div>

              </div><!-- End sidebar recent posts-->

              <div class="sidebar-item tags">
                <h3 class="sidebar-title">Tags</h3>
                <ul class="mt-3">
                  <li><a href="#">App</a></li>
                  <li><a href="#">IT</a></li>
                  <li><a href="#">Business</a></li>
                  <li><a href="#">Mac</a></li>
                  <li><a href="#">Design</a></li>
                  <li><a href="#">Office</a></li>
                  <li><a href="#">Creative</a></li>
                  <li><a href="#">Studio</a></li>
                  <li><a href="#">Smart</a></li>
                  <li><a href="#">Tips</a></li>
                  <li><a href="#">Marketing</a></li>
                </ul>
              </div><!-- End sidebar tags-->

            </div><!-- End Blog Sidebar -->

          </div>
        </div>

      </div>
    </section>
    <!-- End Blog Details Section -->
@endsection