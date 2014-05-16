<div class="home index">
    <div class="page-header">
        <h1><?php echo __('Cooling Systems'); ?></h1>
    </div>

    <?php echo __('Welcome to Cooling Systems Management.');	?>


    <div class="row-fluid">
        <div class="span6">
            <h3><?php echo __('Clientes');?></h3>
            <ul>

                <li><?php echo $this->Html->link(__('Listar clientes'), '/ingredients'); ?></li>
                <li><?php echo $this->Html->link(__('Listar clientes do dia'), '/plates'); ?></li>
                <li><?php echo $this->Html->link(__('Adicionar'), '/plateSetCollections'); ?></li>
                <li><?php echo $this->Html->link(__('Editar'), '/menus'); ?></li>
                <li><?php echo $this->Html->link(__('Apagar'), '/menus'); ?></li>
            </ul>
        </div>
        <div class="span6">
            <h3><?php echo __('Agenda');?></h3>
            <ul>
                <li><?php echo $this->Html->link(__('Listar clientes em aniversario'), '/requisitions'); ?></li>
                <li><?php echo $this->Html->link(__('Listar clientes com aniversario proximo'), '/occurredMenus'); ?></li>
                <li><?php echo $this->Html->link(__('Warehouse Requisition'), '/warehouseRequisitions'); ?></li>
            </ul>
        </div>
    </div>

    <div class="row-fluid">
        <div class="span6">
            <h3><?php echo __('Venda e Manutencão');?></h3>
            <ul>
                <li><?php echo $this->Html->link(__('Entity Types'), ''); ?></li>
                <li><?php echo $this->Html->link(__('Entities'), '/entities'); ?></li>
                <li><?php echo $this->Html->link(__('Beneficiaries'), '/beneficiaries'); ?></li>
            </ul>
        </div>
        <div class="span6">
            <h3><?php echo __('Contabilidade');?></h3>
            <ul>
                <li><?php echo $this->Html->link(__('Diets'), '/diets'); ?></li>
                <li><?php echo $this->Html->link(__('Meals'), '/meals'); ?></li>
                <li><?php echo $this->Html->link(__('Week Days'), '/weekDays'); ?></li>
                <li><?php echo $this->Html->link(__('Measurements'), '/measurementTypes'); ?></li>
                <li><?php echo $this->Html->link(__('Nutritional Information'), '/nutritionalInformations'); ?></li>
            </ul>
        </div>
    </div>

    <div class="row-fluid">
        <div class="span6">
            <h3><?php echo __('Administracao');?></h3>
            <ul>
                <li><?php echo $this->Html->link(__('Manage IDs'), '/identificationTypes'); ?></li>
                <li><?php echo $this->Html->link(__('Entities'), '/entities'); ?></li>
                <li><?php echo $this->Html->link(__('Beneficiaries'), '/beneficiaries'); ?></li>
            </ul>
        </div>
        <div class="span6">
            <h3><?php echo __('Outros');?></h3>
            <ul>
                <li><?php echo $this->Html->link(__('Diets'), '/diets'); ?></li>
                <li><?php echo $this->Html->link(__('Meals'), '/meals'); ?></li>
                <li><?php echo $this->Html->link(__('Week Days'), '/weekDays'); ?></li>
                <li><?php echo $this->Html->link(__('Measurements'), '/measurementTypes'); ?></li>
                <li><?php echo $this->Html->link(__('Nutritional Information'), '/nutritionalInformations'); ?></li>
            </ul>
        </div>
    </div>

    <br/>
</div>

