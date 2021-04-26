<div>
  <h3> nowa notatka </h3>
  <div>
    <?php if($params['created']): ?>
    <div>
      <div>Tutuł: <?php echo $params['title']?></div>
      <div>Treść: <?php echo $params['description']?></div>
    </div>
    <?php else : ?>
    <form action="/systemNotes/?action=create"" class="note-form" method="post">
      <ul>
        <li>
          <label>Tytuł <span class="required">*</span></label>
          <input type="text" name="title" class="field-long">
        </li>
        <li>
          <label>Treść</label>
          <textarea name="description" id="field5" class="field-long field-textarea"></textarea>
        </li>
        <li>
          <input type="submit" value="Submit">
        </li>
      </ul>
    </form>
    <?php endif; ?>
  </div>
</div>