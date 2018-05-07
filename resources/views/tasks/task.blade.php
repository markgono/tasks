<li>
  <a href="/tasks/{{ $task->id }}" class="task-item">
    <p class="task-item__number">{{ $task->id }}</p>
    <div class="task-item__content">
      <h2 class="task-item__title">{{ $task->title }}</h2>
      <small>
        <span class="task-item__author">&ndash; {{ $task->user->name }}</span>
        on 
        <span class="task-item__date">{{ $task->created_at->toFormattedDateString() }}</span>
      </small>
      <p class="task-item__body">{{ $task->body }}</p>
    </div>
  </a>
</li>