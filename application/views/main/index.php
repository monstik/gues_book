<header class="masthead" style="background-image: url('/public/images/home-bg.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                    <h1>Блог на PHP</h1>
                    <span class="subheading">г-код</span>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="container">


    <h3 class="title-comments">Комментарии (6)</h3>
    <ul class="media-list">
        <!-- Комментарий (уровень 1) -->
        <li class="media rounded" style="background-color: white">
            <div class="media mr-3">
                <a href="#">
                    <img class="media-object img-rounded" src="https://itchief.ru/examples/images/avatar1.jpg"
                         alt="...">
                </a>
            </div>
            <div class="media-body">
                <div class="media-heading">
                    <div class="author">Дима</div>
                    <div class="metadata">
                        <span class="date">16 ноября 2015, 13:43</span>
                    </div>
                </div>
                <div class="media-text text-justify">Lorem ipsum dolor sit amet. Blanditiis praesentium voluptatum
                    deleniti atque. Autem vel illum, qui blanditiis praesentium voluptatum deleniti atque corrupti.
                    Dolor repellendus cum soluta nobis. Corporis suscipit laboriosam, nisi ut enim. Debitis aut
                    perferendis doloribus asperiores repellat. sint, obcaecati cupiditate non numquam eius. Itaque earum
                    rerum facilis. Similique sunt in ea commodi. Dolor repellendus numquam eius modi. Quam nihil
                    molestiae consequatur, vel illum, qui ratione voluptatem accusantium doloremque.
                </div>
                <div class="footer-comment">
                        <span class="vote plus" title="Нравится">
                           <i class="fa fa-thumbs-up"></i>
                             </span>
                    <span class="rating">
                                 +1
                                </span>
                    <span class="vote minus" title="Не нравится">
                                  <i class="fa fa-thumbs-down"></i>
                               </span>
                    <span class="devide">
                                  |
                            </span>
                    <span class="comment-reply">
                            <a href="#" class="reply">ответить</a>
        </span>
        </li>

    </ul>


    <div class="clearfix">
        <?php echo $pagination; ?>
    </div>
</div>

