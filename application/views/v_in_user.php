<section>
    <left>
        <form action="http://localhost/codeigniter3/web/user" method="post">
            <table>
                <tr>
                    <th>Username</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="username" id="username" value="<?php echo set_value('username'); ?>">
                    </td>
                    <td><?php echo form_error('username'); ?></td>
                </tr>

                <tr>
                    <th>Password</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="password" id="password" value="<?php echo set_value('password'); ?>">
                    </td>
                    <td><?php echo form_error('password'); ?></td>
                </tr>

                <tr>
                    <td colspan="3" align="left">
                        <input type="submit" value="Kirim">
                    </td>
                </tr>
            </table>
        </form>
    </left>
</section>