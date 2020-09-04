<?php $flag = 0;
foreach ($lists as $val){
   foreach ($val['lists'] as $vvl){
      foreach ($vvl['floor_list'] as $vl){?>
<tr class="typekind <?php echo $flag;?> dis-n">
   <td width="10"><?php echo $vvl['building'];?></td>
   <td width="10"><?php echo $vl['floor'];?></td>
   <td class="iptArr">
      <?php foreach ($vl['room_list'] as $roomVal){ ?>
      <div class="dis-ib <?php if($roomVal['state'] == 0){?>green<?php }else if($roomVal['state'] == 1){?>gray<?php }else if($roomVal['state'] == 2 || $roomVal['state'] == 3){?>red<?php }?>">
         <input type="checkbox" class=" cbx" onchange="checkedChange(this)" />
         <span class="col-white" class="choRoom"
         data-user-name = "<?php if( isset($roomVal['user_name']) ){echo $roomVal['user_name'];} ?>" data-start-time = "<?php if( isset($roomVal['user_name']) ){echo $roomVal['start_time'];} ?>" data-order-id="<?php if( isset($roomVal['order_id']) ){echo $roomVal['order_id'];} ?>"
          data-room-price-day="<?php if(isset($roomVal['room_state_list'][0]['price_data']['day_room_amount'])){ echo $roomVal['room_state_list'][0]['price_data']['day_room_amount'];}?>" data-room-price-hour="<?php if(isset($roomVal['room_state_list'][0]['price_data']['hour_room_amount'])){ echo $roomVal['room_state_list'][0]['price_data']['hour_room_amount'];}?>" data-room-price-pledge="<?php if(isset($roomVal['room_state_list'][0]['price_data']['room_pledge_amount'])){echo $roomVal['room_state_list'][0]['price_data']['room_pledge_amount'];}?>" data-room-type="{$roomVal['room_type']}" data-room-id="{$roomVal['room_id']}" data-room-building="{$roomVal['building']}" data-room-floor="{$roomVal['floor']}">{$roomVal['room_num']}</span>
      </div>
      <?php }?>
   </td>
</tr>
<?php  }}
$flag++;} ?>