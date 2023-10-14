<?php get_header(); ?>

</header>
    <hr>
    <main class="content">
        <div class="container latest_portfolio">
            <div class="row intro">
                <div class="col-md-4">
                    <div class="contents shadow">
                        <h2 class="heading2">I’m alikerock</h2>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contents shadow">
                        <h2 class="heading2">I create super awesome stuff</h2>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contents shadow">
                        <h2 class="heading2">I’m available for freelance projects</h2>
                    </div>
                </div>
            </div>
            <div class="row list">
                <div class="col-md-4">
                    <div class="contents shadow">
                        <img src="images/latest_portfolio_01.jpg" alt="latest_portfolio_01">
                        <div class="hover_contents">
                            <div class="list_info">
                                <h3><a href="">Project Title</a> <img src="images/portfolio_list_arrow.png" alt="list arrow"></h3>
                                <p><a href="">Click to see project</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contents shadow">
                        <img src="images/latest_portfolio_02.jpg" alt="latest_portfolio_02">
                        <div class="hover_contents">
                            <div class="list_info">
                                <h3><a href="">Project Title</a> <img src="images/portfolio_list_arrow.png" alt="list arrow"></h3>
                                <p><a href="">Click to see project</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contents shadow">
                        <img src="images/latest_portfolio_03.jpg" alt="latest_portfolio_03">
                        <div class="hover_contents">
                            <div class="list_info">
                                <h3><a href="">Project Title</a> <img src="images/portfolio_list_arrow.png" alt="list arrow"></h3>
                                <p><a href="">Click to see project</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contents shadow">
                        <img src="images/latest_portfolio_04.jpg" alt="latest_portfolio_04">
                        <div class="hover_contents">
                            <div class="list_info">
                                <h3><a href="">Project Title</a> <img src="images/portfolio_list_arrow.png" alt="list arrow"></h3>
                                <p><a href="">Click to see project</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contents shadow">
                        <img src="images/latest_portfolio_05.jpg" alt="latest_portfolio_05">
                        <div class="hover_contents">
                            <div class="list_info">
                                <h3><a href="">Project Title</a> <img src="images/portfolio_list_arrow.png" alt="list arrow"></h3>
                                <p><a href="">Click to see project</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 shadow">
                    <div class="contents">
                        <img src="images/latest_portfolio_06.jpg" alt="latest_portfolio_06">
                        <div class="hover_contents">
                            <div class="list_info">
                                <h3><a href="">Project Title</a> <img src="images/portfolio_list_arrow.png" alt="list arrow"></h3>
                                <p><a href="">Click to see project</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <p class="porfolio_readmore">
                <a href="" class="primary-btn">See my full portfolio</a>        
            </p>
        </div>



<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php the_content(); ?>

<?php endwhile; else : ?>
	<p><?php esc_html_e( '조회 결과가 없습니다' ); ?></p>
<?php endif; ?>

<?php get_footer();?>