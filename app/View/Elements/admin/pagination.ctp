<div class="pagination-div dataTables_paginate paging_simple_numbers" id="srch1">
                <ul class="pagination">
                  <li class="paginate_button previous"><?php echo $this->Paginator->prev(' << ' . __(''),array(),null,array('class' => 'prev disabled'));?></li>
                  <li><?php echo $this->Paginator->numbers(array('separator'=>null));?></li>
                  <li class="paginate_button next"><?php echo $this->Paginator->next(' >> ' . __(''),array(),null,array('class' => 'next disabled'));?></li>
                 
               </ul>
              </div>