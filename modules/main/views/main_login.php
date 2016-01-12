<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<style type="text/css">
    #login_message:empty{
        display:none;
    }
</style>
<table width="400px" align="center" border="0">
<?php echo form_open('main/login');?>
  <tr>
    <td rowspan="3" width="40%" valign="top"><em><img src="<?= base_url();?>assets/nocms/images/No-CMS-logo.png" width="125" height="125" alt="CGSwalayan" /></em>&nbsp;&nbsp;</td>
    <td width="30%"><?php echo form_label('{{ language:Identity }}');?></td>
    <td width="30%"><?php echo form_input('identity', $identity);?></td>
  </tr>
  <tr>
    <td><?php echo form_label('{{ language:Password }}');?></td>
    <td><?php echo form_password('password');?></td>
  </tr>
  <tr>
    <td></td>
    <td><?php echo form_submit('login', $login_caption, 'class="btn btn-primary"');?>&nbsp;<?php echo anchor(site_url('main/register/add'), $register_caption, array('class'=>'btn'));?></td>
  </tr>
<?php echo form_close();?>
<?php if(count($providers)>0){
        echo '{{ language:Or Login with }}:';
        foreach($providers as $provider=>$connected){
            echo anchor(site_url('main/hauth/login/'.$provider), '<img src="'.base_url('modules/main/assets/third_party/'.$provider.'.png').'" />');
        }
    };
    ?>
</table>
<div id="login_message"><?php echo isset($message)?$message:''; ?></div>
