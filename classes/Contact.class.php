<?php
    class Contact extends  Entity{
        public static $tableName = 'contact';
        public static $keyColumn = 'contact_id';
        
        public function render(){
            $render = "
                <table id='contact'>
                    <thead>
                        <tr>
                            <th colspan='2'><h3>KONTAKT</h3><span id='website'><a href=\"$this->website\" target='_blank'>$this->website</a></span></th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td class='table_information'>Vlasnik</td>
                            <td class='table_answer'>$this->vlasnik</td>
                        </tr>
                        <tr>
                            <td class='table_information'>Telefon:</td>
                            <td><a href='tel:$this->tel'>$this->tel</a></td>
                        </tr>
                        <tr>
                            <td class='table_information'>Adresa:</td>
                            <td>$this->adresa</td>
                        </tr>
                    </tbody>
                        
                    <tfoot>
                        <tr>
                            <td colspan='2'><p id='price'>$this->price</p>
                                <a href='#contact_owner' rel=\"modal:open\"><button id='question' class='request  modal-btn'>$this->question</button></a>
                            </td>
                            </tr>
                    </tfoot>
                </table>";

            return $render;
        }
    }