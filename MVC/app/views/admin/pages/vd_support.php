<?php foreach ($data["requests"] as $request) : ?>
    <h4 class="date-post col-s12"><?php print_r($request[0]->{'date_post'}); ?></h4>
    <div class="col-s12 user-day-requests">
        <?php foreach ($request as $value) : ?>
            <article class=" col-s12">
                <div class="user-request">
                    <section class="user-name">
                        <h4><?php echo ($value->{'user_name'}); ?></h4>
                    </section>
                    <section class="time-post">
                        <h4><?php echo ($value->{'time_post'}); ?></h4>
                    </section>
                    <section class="request-content">
                        <p><?php echo ($value->{'content'}); ?></p>
                    </section>
                    <div class="reply-tools">
                        <button class="btn">
                            <i class="fas fa-bookmark"></i>
                        </button>
                        <button id="btn" class="btn">
                            <i class="fas fa-trash"></i>
                        </button>
                        <button id="btn" class="btn">
                            <i class="fas fa-comment-dots"></i>
                        </button>
                    </div>
                </div>

            </article>
        <?php endforeach; ?>
    </div>
<?php endforeach; ?>