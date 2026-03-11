import React from "react";
import { View, Text } from "react-native";
import { personalInfo } from "../data/portfolio";

const stats = [
  { value: "3+", label: "Anios de experiencia", icon: "~" },
  { value: "10+", label: "Proyectos completados", icon: "#" },
  { value: "5+", label: "Clientes satisfechos", icon: "*" },
];

export default function AboutMe() {
  return (
    <View id="about" className="py-28 bg-white px-6 relative overflow-hidden">
      <View className="absolute top-0 right-0 w-60 h-60 dots-pattern opacity-20" />
      <View className="absolute bottom-20 left-0 w-40 h-40 rounded-full bg-slate-100/50 glow-orb" />

      <View className="max-w-5xl mx-auto">
        <View className="items-center mb-16">
          <View className="bg-slate-100 rounded-full px-4 py-1.5 mb-4">
            <Text className="text-xs font-semibold text-slate-500 tracking-widest uppercase">
              Sobre mi
            </Text>
          </View>
          <Text className="text-4xl md:text-5xl font-extrabold text-slate-900 text-center tracking-tight">
            Conoceme
          </Text>
        </View>

        <View className="md:flex-row gap-16 items-start">
          {/* Photo placeholder */}
          <View className="items-center mb-10 md:mb-0">
            <View className="w-80 h-80 rounded-3xl bg-gradient-to-br from-slate-50 to-slate-200 items-center justify-center shadow-inner relative overflow-hidden border border-slate-200">
              <View className="absolute inset-0 grid-pattern opacity-20" />
              <View className="z-10 items-center">
                <Text className="text-6xl font-mono font-extrabold text-slate-300">
                  {"< />"}
                </Text>
                <Text className="text-xs text-slate-400 mt-3 font-medium tracking-wider">
                  TU FOTO AQUI
                </Text>
              </View>
            </View>
          </View>

          <View className="flex-1">
            {/* Bio principal */}
            <View className="bg-slate-50 rounded-2xl p-6 border border-slate-100 mb-6">
              <Text className="text-lg text-slate-700 leading-8 font-light">
                {personalInfo.bio}
              </Text>
            </View>

            {/* Bio extended */}
            <Text className="text-base text-slate-500 leading-7 mb-8 font-light">
              {personalInfo.bioExtended}
            </Text>

            {/* Divider */}
            <View className="flex-row items-center gap-4 mb-8">
              <View className="flex-1 h-px bg-slate-200" />
              <Text className="text-xs text-slate-400 font-semibold tracking-widest">
                EN NUMEROS
              </Text>
              <View className="flex-1 h-px bg-slate-200" />
            </View>

            {/* Stats */}
            <View className="flex-row gap-4">
              {stats.map((stat) => (
                <View
                  key={stat.value}
                  className="stat-card flex-1 bg-white rounded-2xl p-5 items-center border border-slate-100 shadow-sm"
                >
                  <Text className="text-xs font-mono font-bold text-slate-400 mb-2">
                    {stat.icon}
                  </Text>
                  <Text className="text-3xl font-extrabold text-slate-900 mb-1">
                    {stat.value}
                  </Text>
                  <Text className="text-xs text-slate-500 text-center font-medium leading-4">
                    {stat.label}
                  </Text>
                </View>
              ))}
            </View>
          </View>
        </View>
      </View>
    </View>
  );
}
