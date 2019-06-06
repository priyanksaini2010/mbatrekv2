<?php $this->setPageTitle('Our Team');
$foundingMembers = FoundingTeam::model()->findAllByAttributes(array('type' => 1));
$coreMembers = FoundingTeam::model()->findAllByAttributes(array('type' => 2));
$coreBreakUp = array();
$i = 0;
$j = 0;
foreach ($coreMembers as $member) {
    if ($i > 3) {
        $i = 0;
        $j = 0;
    }
    $coreBreakUp[$i][$j] = $member;
    $i++;$j++;
}
$cdb = new CDbCriteria();
$cdb->order = 'id desc';
$cdb->addCondition('type = 3');
$internsMembers = FoundingTeam::model()->findAll($cdb);
?>
<div class="bread_crum">
    <ul class="list-inline list-unstyled">
        <li><a href="<?php echo Yii::app()->getHomeUrl(); ?>"><i class="fa fa-home" aria-hidden="true"></i></a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
        <li class="active"><a href="javascript:void(0);">Our Team</a></li>
    </ul>
</div>
<div class="our_Team_mbatrek">
    <div class="container">
        <div class="our_team_block">
            <h3>Our Founding Team</h3>
            <ul>
                <?php foreach ($foundingMembers as $founder) {?>
                <li class=" show_content_alok" alt="<?php echo $founder->id;?>">
                    <a href="javascript:void(0);">
                        <img class="witho_hover"  src="<?php echo  Yii::app()->baseUrl.'/assets/team/'.$founder->photo_2;?>" alt="" />
                        <img class="hover_img"   src="<?php echo  Yii::app()->baseUrl.'/assets/team/'.$founder->photo_1;?>" alt="" />
                    </a>
                    <h3><?php echo ucwords($founder->name);?><span><?php echo ucwords($founder->desig);?></span></h3>
                </li>
                <?php }?>

            </ul>
            <?php foreach ($foundingMembers as $founder) {?>
            <div class="expand_information alok_info <?php echo $founder->id;?>">
                <?php echo $founder->about;?>
                <div class="social_info_admin">
                    <ul>
                        <li><a href="mailto:<?php echo $founder->email;?>" target="_blank"><img src="images/company/company_logo/mail_iocn_team.png" alt="" /> </a><span><?php echo $founder->email;?></span></li>
                        <li>&nbsp;<a href="mailto:<?php echo $founder->email;?>" target="_blank"><img src="images/company/company_logo/phone_icon_Team.png" alt="" /></a><span><?php echo $founder->phone;?></span></li>
                        <li><a title="LinkedIn Profile" href="<?php echo $founder->linked_in;?>" target="_blank"><img src="images/company/company_logo/linkedin_icon_Team.png" alt="" /><span>LinkedIn Profile</span></a></li>
                    </ul>
                </div>
            </div>
            <?php }?>
        </div>
        <div class="our_team_block core_team">
            <h3>Our Core Team</h3>
            <?php foreach ($coreBreakUp as $coreMembers){?>
            <ul>
                <?php foreach ($coreMembers as $founder) {?>
                <li class="show_content_alok " alt="<?php echo $founder->id;?>">
                    <a href="javascript:void(0);">
                        <img class="witho_hover"  src="<?php echo  Yii::app()->baseUrl.'/assets/team/'.$founder->photo_2;?>" alt="" />
                        <img class="hover_img"   src="<?php echo  Yii::app()->baseUrl.'/assets/team/'.$founder->photo_1;?>" alt="" />
                    </a>
                    <h3><?php echo ucwords($founder->name);?> <span><?php echo html_entity_decode(ucwords($founder->desig));?></span></h3>
                </li>
                <?php }?>
            </ul>
           <?php foreach ($coreMembers as $founder) {?>
                <div class="expand_information alok_info <?php echo $founder->id;?>">
                    <?php echo $founder->about;?>
                    <div class="social_info_admin">
                        <ul>
                            <li><a href="mailto:<?php echo $founder->email;?>" target="_blank"><img src="images/company/company_logo/mail_iocn_team.png" alt="" /> </a><span><?php echo $founder->email;?></span></li>
                            <li>&nbsp;<a href="mailto:<?php echo $founder->email;?>" target="_blank"><img src="images/company/company_logo/phone_icon_Team.png" alt="" /></a><span><?php echo $founder->phone;?></span></li>
                            <li><a title="LinkedIn Profile" href="<?php echo $founder->linked_in;?>" target="_blank"><img src="images/company/company_logo/linkedin_icon_Team.png" alt="" /><span>LinkedIn Profile</span></a></li> 
                        </ul>
                    </div>
                </div>
            <?php }?>
            <?php }?>
        </div>
        <div class="our_team_block intern_Team">
            <h3>Our Interns</h3>
            <ul>
                <?php foreach ($internsMembers as $founder) {?>
                <li class="pull-right">
                    <a href="<?php echo $founder->linked_in;?>" target="_blank">
                        <img class="witho_hover" style="width: 103px;height: 97px;" src="<?php echo  Yii::app()->baseUrl.'/assets/team/'.$founder->photo_2;?>" alt="" />
                        <img class="hover_img"  style="width: 103px;height: 97px;" src="<?php echo  Yii::app()->baseUrl.'/assets/team/'.$founder->photo_1;?>" alt="" />
                    </a>
                    <h3><?php echo ucwords($founder->name);?><span> <?php echo ucwords($founder->college);?></span> <span><?php echo ucwords($founder->batch);?></span></h3>
                </li>
                <?php }?>
            </ul>
        </div>
    </div>
</div>
