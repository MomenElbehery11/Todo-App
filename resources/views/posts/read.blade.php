<div class="container">
<table>
    <thead>
      <tr>
        <th>Task ID</th>
        <th>Task Title</th>
        <th>Task Body</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($AllPosts as $p)
        <tr>
          <td>{{ $p->id }}</td>
          <td>{{ $p->title }}</td>
          <td>{{ $p->body }}</td>
          <td>
            <a href="{{ route('post.edit', $p->id) }}" style="background:yellow" role="button">Edit</a>
            <a href="{{ route('post.delete', $p->id) }}" style="background:rgb(117, 51, 51)" role="button">Delete</a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
  <br>
<a href="{{route('post.deleteAll')}}"style="background:red" role="button">Delete All Tasks</a>
<a href="{{route('post.create')}}"style="background:green" role="button">Insert A Task</a>

</div>
<style>


.container {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

table {
  border-collapse: collapse;
  width: 100%;
  margin-bottom: 20px;
  box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
  border-radius: 5px;
  overflow: hidden;
}

th, td {
  padding: 15px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

th {
  background-color: #a87979;
  font-weight: bold;
}

tr:hover {
  background-color: #ca8d1c;
}
    body {
	background-color: #eee;
	background: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/732/wood-floor.jpg) no-repeat;
	background-size: cover;
	font-family: 'Signika', sans-serif;
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
}
header {
	margin-bottom:50px;
	ol {
		margin:0;
		padding:0;
		list-style-type: none;
		display: grid;
		grid-template-columns: repeat(9, 1fr);
		grid-gap: 0 6px;
		width:1200px;
		margin: 0 auto;
		overflow: scroll;
		
		@media (min-width:1400px) {
			grid-template-columns: repeat(11, 1fr);
			width:1400px;
			
			li:nth-child(5) {
				grid-column: span 3;
			}
		}
		
	}
	
	li {
		background-color:darken(#0A6FAC, 20%);
		color: white;
		font-size:11px;
		font-weight:600;
		text-align:center;
		line-height:16px;
		letter-spacing:2px;
		text-transform: uppercase;
		padding:3px 0;
		
		span {
			font-size:10px;
			font-weight:400;
		}
	}
}
.bracket {
	display: grid;
	grid-template-columns: repeat(9, 1fr);
	grid-template-rows: repeat(94,8px);
	grid-gap: 2px 6px;
	grid-auto-flow: column;
	margin: 20px auto;
	width:1200px;
	overflow-y:scroll;
	
	@media (min-width:1400px) {
		grid-template-columns: repeat(11, 1fr);
		width:1400px;
	}
} 

.region {
	display: grid;
	grid-template-columns: repeat(4, 1fr);
	grid-template-rows: repeat(46,8px);
	grid-gap: 2px 6px;
	grid-auto-flow: column;
}

.region-1 {
	grid-column: 1 / span 4;
	grid-row: 1 / span 47;
}

.final-four {
	grid-column: 4 / span 3;
	grid-row: 45 / span 6;
	
	display: grid;
	grid-template-columns: repeat(3, 1fr);
	grid-template-rows: repeat(6,8px);
	grid-gap: 2px 6px;
	grid-auto-flow: column;
	
	@media (min-width:1400px) {
		grid-column: 5 / span 3;
	}
}

.region-2 {
	grid-column: 1 / span 4;
	grid-row: 49 / span 47
}

.region-3 {
	grid-column: -5 / span 4;
	grid-row: 1 / span 47;
}

.region-4 {
	grid-column: -5 / span 4;
	grid-row: 49 / span 47
}


ul {
	margin:0;
	padding:0;
	list-style-type:none;
}

.team {
	background-color: white;
	font-size:11px;
	height:18px;
	line-height:18px;
	padding:0 5px;
}

.team-top {
	margin-bottom:2px;
}

.winner {
	background-color:#005eb8;
	color: white;
}

.matchup {
	grid-column:span 1;
	grid-row:span 4;
	box-shadow:1px 1px 10px rgba(0,0,0,.5);
}

.matchup-1,
.matchup-9 {
	grid-column:span 1;
	grid-row:span 4;
}

.matchup-2,
.matchup-10 {
	grid-row: 7 / span 4;
}

.matchup-3,
.matchup-11 {
	grid-row: 13 / span 4;
}

.matchup-4,
.matchup-12 {
	grid-row: 19 / span 4;
}

.matchup-5,
.matchup-13 {
	grid-row: 25 / span 4;
}

.matchup-6,
.matchup-14 {
	grid-row: 31 / span 4;
}

.matchup-7,
.matchup-15 {
	grid-row: 37 / span 4;
}

.matchup-8,
.matchup-16 {
	grid-row: 43 / span 4;
}

.matchup-17,
.matchup-25 {
	grid-column: -2/span 1;
	grid-row: 1/span 4;
}

.matchup-18,
.matchup-26 {
	grid-column:-2/span 1;
	grid-row:7/span 4;
}

.matchup-19,
.matchup-27 {
	grid-column:-2/span 1;
	grid-row:13/span 4;
}

.matchup-20,
.matchup-28 {
	grid-column:-2/span 1;
	grid-row:19/span 4;
}

.matchup-21,
.matchup-29 {
	grid-column:-2/span 1;
	grid-row:25/span 4;
}

.matchup-22,
.matchup-30 {
	grid-column:-2/span 1;
	grid-row:31/span 4;
}

.matchup-23,
.matchup-31 {
	grid-column:-2/span 1;
	grid-row:37/span 4;
}

.matchup-24,
.matchup-32 {
	grid-column:-2/span 1;
	grid-row:43/span 4;
}

.matchup-33,
.matchup-37 {
	grid-column: 2 / span 1;
	grid-row: 4 / span 4;
}

.matchup-34,
.matchup-38 {
	grid-column: 2 / span 1;
	grid-row: 16 / span 4;
}

.matchup-35,
.matchup-39 {
	grid-column: 2 / span 1;
	grid-row: 28 / span 4;
}

.matchup-36,
.matchup-40 {
	grid-column: 2 / span 1;
	grid-row: 40 / span 4;
}

.matchup-41,
.matchup-45 {
	grid-column: -3 / span 1;
	grid-row: 4 / span 4;
}

.matchup-42,
.matchup-46 {
	grid-column: -3 / span 1;
	grid-row: 16 / span 4;
}

.matchup-43,
.matchup-47 {
	grid-column: -3 / span 1;
	grid-row: 28 / span 4;
}

.matchup-44,
.matchup-48 {
	grid-column: -3 / span 1;
	grid-row: 40 / span 4;
}

.matchup-49,
.matchup-51 {
	grid-column: 3 / span 1;
	grid-row: 10 / span 4;
}

.matchup-50,
.matchup-52 {
	grid-column: 3 / span 1;
	grid-row: 34 / span 4;
}

.matchup-53,
.matchup-55 {
	grid-column: -4 / span 1;
	grid-row: 10 / span 4;
}

.matchup-54,
.matchup-56 {
	grid-column: -4 / span 1;
	grid-row: 34 / span 4;
}

.matchup-57,
.matchup-58 {
	grid-column: 4 / span 1;
	grid-row: 22 / span 4;
}

.matchup-59,
.matchup-60 {
	grid-column: -5 / span 1;
	grid-row: 22 / span 4;
}

.matchup-61 {
	grid-column: 1 / span 1;
	grid-row: 2/ span 4;
}

.matchup-62 {
	grid-column: 3 / span 1;
	grid-row: 2/ span 4;
}

.championship {
	grid-column: 2 / span 1;
	grid-row: 1/ span 4;
	.team {
		height:28px;
		line-height: 28px;
	}
}

.logo {
	grid-column: 4 / span 3;
	grid-row: 1;
	margin:0;
	
	@media (min-width: 1400px) {
		grid-column: 5 / span 3;
	}
	
	img {
	//	max-width: 100%;
		display: block;
		max-width: 350px;
		margin-inline: auto;
	}
}
a {
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 10px;
  box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.2);
  transition: background-color 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
}

a:hover {
  box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.2);
}
</style>