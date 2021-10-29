<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
                <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget' => 'tree'],
                'items' => [
                    ['label' => Yii::t('ui', 'Главная страница'), 'url' => ['/site/index'], 'icon' => 'home'],
                    [
                        'label' => Yii::t('ui', "Справочники"),
                        'icon' => 'folder',
                        'url' => '#',
                        'items' => [
                            ['label' => Yii::t('ui', 'Ученики'), 'icon' => 'file', 'url' => ['/catalog/pupil/index']],
                            ['label' => Yii::t('ui', 'Комнаты'), 'icon' => 'file', 'url' => ['/catalog/room/index']],
                        ],
                    ],
                ],
            ]
        ) ?>



    </section>

</aside>
