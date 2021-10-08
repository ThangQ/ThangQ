<form method="POST" id="help-form" action="myaccount/sendsupport">
    <fieldset>
        <legend>You want</legend>
        <select name='purpose' id="purpose" title="Select purpose">
            <label for="purpose">Select your purpose</label>
            <option value="Get help">Get help</option>
            <option value='Give feedback'>Give feedback</option>
        </select>
    </fieldset>
    <fieldset>
        <legend>Select tool</legend>
        <select name='tools' id='tools' title="Select tool">
            <?php //while ($row = mysqli_fetch_assoc($query_result)) : 
            ?>
            <option value="<?php //echo $row['tool_name'] 
                            ?>"><?php //echo $row['tool_name'] 
                                ?></option>
            <?php //endwhile; 
            ?>
        </select>
    </fieldset>
    <textarea name="support_content" placeholder="Please write specific content here..."></textarea>
    <button type="submit" name="send_support" form="help-form" title="Send">Send <i class="far fa-paper-plane"></i></button>
</form>