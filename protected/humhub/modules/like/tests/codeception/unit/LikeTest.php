<?php

namespace tests\codeception\unit\modules\like;

use tests\codeception\_support\HumHubDbTestCase;
use Codeception\Specify;
use humhub\modules\like\models\Like;
use humhub\modules\post\models\Post;

class LikeTest extends HumHubDbTestCase
{

    use Specify;

    public function testAcceptFriendShip()
    {
        $this->becomeUser('User2');

        $like = new Like([
            'object_model' => Post::class,
            'object_id' => 1
        ]);

        $this->assertTrue($like->save(), 'Save like.');
        $this->assertMailSent(1, 'Like notification sent');
        $this->assertHasNotification(\humhub\modules\like\notifications\NewLike::class, $like);
        $this->assertHasActivity(\humhub\modules\like\activities\Liked::class, $like);
    }

}
