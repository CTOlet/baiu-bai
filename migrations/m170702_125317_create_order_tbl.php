<?php

use yii\db\Migration;

class m170702_125317_create_order_tbl extends Migration
{
    public function safeUp()
    {
        $this->createTable('{{%order}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'phone' => $this->string()->notNull(),
            'item' => $this->integer(1)->notNull(),
            'address' => $this->string()->notNull(),
            'status' => $this->integer(1)->notNull(),
            'price' => $this->integer()->notNull(),
            'discount' => $this->integer()->notNull()->defaultValue(0),
            'discount_comment' => $this->text(),
            'userAgent' => $this->text(),
            'userHost' => $this->text(),
            'userIp' => $this->text(),
            'comment' => $this->text(),
            'createdAt' => $this->dateTime()->notNull(),
            'updatedAt' => $this->dateTime()->notNull()
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('{{%order}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m170702_125317_create_order_tbl cannot be reverted.\n";

        return false;
    }
    */
}
