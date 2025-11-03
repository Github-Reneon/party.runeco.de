package main

import (
	fiber "github.com/gofiber/fiber/v2"
	"github.com/gofiber/template/html/v2"
)

func main() {
	engine := html.New("./views/", ".html")

	app := fiber.New(
		fiber.Config{
			Views: engine,
		},
	)

	app.Get("/", GetIndex)

	app.Listen(":42069")
}

