<?php $this->load->view('components/topbar') ?>
<div id="layoutSidenav">
    <?php $this->load->view('components/sidebar') ?>
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" type="text/css" rel="stylesheet" >
    <link rel="stylesheet" href="<?php echo base_url('assets/css/chatcss.css') ?>">
                
    <div id="layoutSidenav_content">
        <main>
            <div class="container-xl px-4 mt-4">
                <div class="row">
                    <div class="card-body">
                    <div class="card-header">Chat</div>
                    <div class="messaging">
                        <div class="inbox_msg">
                            <div class="inbox_people">
                                <div class="inbox_chat">
                                    <?php foreach ($users as $key => $value) { ?>
                                        <?php if ($this->session->userdata('id') == $value->id) {
                                            continue;
                                        } ?>
                                        <a href="<?php echo base_url('chat/chat_with/'); echo $value->id; ?>">
                                            <div class="chat_list <?php if ($this->session->userdata('receiver_id') == $value->id) {
                                                echo "active_chat";
                                            } ?>">
                                                <div class="chat_people">
                                                    <div class="chat_img"> <img src="<?php echo base_url('uploads/user/'); echo $value->image ?>" alt="sunil"> </div>
                                                    <div class="chat_ib">
                                                        <h5><?php echo $value->name ?> <span class="chat_date"><?php echo "" ?></span></h5>
                                                        <p><?php echo "Chat with this user" ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="mesgs">
                                <div class="msg_history">
                                    <?php if (isset($chats)) { ?>
                                        <?php foreach ($chats as $key => $value) { 
                                            if ($value->send_to_id != $this->session->userdata('id')) { ?>
                                                <div class="outgoing_msg">
                                                    <div class="sent_msg">
                                                        <p><?php echo $value->message ?></p>
                                                        <span class="time_date"> <?php echo $value->created_at ?></span>
                                                    </div>
                                                </div>
                                            <?php }else{ ?>
                                                <div class="incoming_msg">
                                                    <div class="incoming_msg_img"> <img src="<?php echo base_url('uploads/user/'); echo $value->image ?>" alt="sunil"> </div>
                                                    <div class="received_msg">
                                                        <div class="received_withd_msg">
                                                            <p><?php echo $value->message ?></p>
                                                            <span class="time_date"> <?php echo $value->created_at ?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                        <?php } ?>
                                    <?php } ?>
                                </div>
                                <div class="type_msg">
                                    <form action="<?php echo base_url('chat/store') ?>" method="POST">
                                        <div class="input_msg_write">
                                            <!-- <input type="hidden" name="receiver_id" value=""> -->
                                            <input type="text" name="message" class="write_msg" placeholder="Type a message" />
                                            <button class="msg_send_btn" type="submit"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </main>
        <?php $this->load->view('components/footer') ?>
    </div>
</div>