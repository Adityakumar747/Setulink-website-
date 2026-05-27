<?php /** @var array $team_members */ ?>
<!-- Team -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <div class="bg-primary divider-bar mb-3 mx-auto"></div>
            <h2 class="display-5 mb-5 text-primary">Team Members</h2>
        </div>
        <div class="row g-4">
            <?php foreach ($team_members as $index => $member): ?>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="<?php echo 0.1 + ($index * 0.2); ?>s">
                <div class="team-item">
                    <div class="overflow-hidden position-relative">
                        <img class="img-fluid" src="<?php echo $member['image']; ?>" alt="<?php echo $member['name']; ?>" loading="lazy"
                            width="500" height="500">
                        <div class="team-social">
                            <a class="btn btn-square btn-dark rounded-circle m-1" href="<?php echo $member['facebook']; ?>" aria-label="Facebook"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-dark rounded-circle m-1" href="<?php echo $member['twitter']; ?>" aria-label="Twitter"><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-dark rounded-circle m-1" href="<?php echo $member['instagram']; ?>" aria-label="Instagram"><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="text-center p-4">
                        <h3 class="h5 mb-0"><?php echo $member['name']; ?></h3>
                        <span class="text-primary"><?php echo $member['role']; ?></span>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>