             <h2 style="margin-top:26px;background:#666 url(image/search_top.png) no-repeat 0 2px;padding-left:18px;width:230px;"><?php echo _('Search Product');?></h2>
                 <form mehtod="post"  action="?">
                      <p><?php echo _('1:Select a Graph:');?><select><option><?php echo _('Pressure');?></option><option><?php echo _('Vacuum');?></option></select></p>
                      <p><?php echo _('2:Air Flow');?>(e.g.120):</p>
                      <p><input type="text" class="text"/><select><option>m³/h</option><option>m³/min</option></select></p>
                      <p><?php echo _('3:Pressure');?>(e.g.200):</p>
                      <p><input type="text" class="text"/><select><option>mbar</option><option>pa</option></select></p>
                      <p><input type="image" src="image/search.gif"/></dd></p>

                 </form>       