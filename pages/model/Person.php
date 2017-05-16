<?php 

	class Person {
		
		private $id = 0;
		private $name = "";
		private $npm = "";
		private $kelas = "";


		function getAll ()
		{
			$i = 0 ;
			for ($i; $i<12;$i++)
			{
				echo ("get : ".$i);
			}

		}


		function setId ($id)
		{
			$this->id=$id;
		}

		function setName ($name)
		{
			$this->name =$name;
		}

		function setNpm ($npm)
		{
			$this->npm = $npm;
		}

		function setKelas ($kelas)
		{
			$this->kelas = $kelas;
		}

		function getId ()
		{
			echo $this->id;
		}

		function getName ()
		{
			echo ($this->name);
		}

		function getNpm ()
		{
			echo ($this->npm);
		}

		function getKelas ()
		{
			echo $this->kelas;
		}

	}
?>