balls = {
    "golf": "Golf Balls, 6",
    "tennis": "Tennis Balls, 3",
    "soccer": "Soccer Ball, 1",
    "ping": "Ping pong balls, 1 doz"
}

for (const ball in balls) {
    if (Object.hasOwnProperty.call(balls, ball)) {
        const element = balls[ball];
        console.log(element);
    }
}

