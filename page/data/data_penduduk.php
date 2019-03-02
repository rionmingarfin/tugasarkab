
<div class="table-responsive">
  <table class="table table-bordered boxx" id="tampil">
     <thead class="thead-light">
       <tr>
         <th>no</th>
         <th>name</th>
         <th>income</th>
         <th>addres</th>
       </tr>
     </thead>
     <tbody>
     <?php
     $no=1;
     $sql=mysqli_query($conn,"SELECT * FROM person JOIN regions ON person.id_regions=regions.id_regions")or die(mysqli_error($conn));
     while ($row=mysqli_fetch_assoc($sql)) {?>
        <tr>
          <td><?=$no++?></td>
          <td><?=$row['name'];?></td>
          <td><?=number_format($row['income']);?></td>
          <td><?=$row['addres'];?></td>
        </tr>
     <?php }?>
     </tbody>
  </table>
</div>